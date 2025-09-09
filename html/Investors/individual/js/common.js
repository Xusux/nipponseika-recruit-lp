const video = document.getElementById("myVideo");
const thumbnailPc = document.getElementById("thumbnail_pc");
const thumbnailSp = document.getElementById("thumbnail_sp");
const playBtns = document.querySelectorAll(".playBtn");

function getActiveThumbnail() {
  return window.innerWidth >= 768 ? thumbnailPc : thumbnailSp;
}

playBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    const activeThumb = getActiveThumbnail();
    video.play();
    if (activeThumb) activeThumb.style.display = "none";
    playBtns.forEach((b) => (b.style.display = "none"));
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const circle = document.getElementById("circle");
  const circleImg = document.getElementById("circle-img");
  const circleTitle = document.getElementById("circle-title");
  const circleContent = document.getElementById("circle-content");

  const pointers = document.querySelectorAll(".pointer-target");

  if (!circle) return;

  pointers.forEach((pointer) => {
    pointer.addEventListener("mouseenter", (e) => {
      const target = e.target;

      const color = target.dataset.color || "000";
      const title = target.dataset.title || "";
      const contentRaw = target.dataset.content || "[]";
      const img = target.dataset.img || "";

      let contentArr;
      try {
        contentArr = JSON.parse(contentRaw);
      } catch {
        contentArr = [contentRaw];
      }

      circle.style.border = `4px solid #${color}`;
      circleTitle.textContent = title;
      circleTitle.style.color = `#${color}`;

      circleContent.innerHTML = contentArr
        .map((item) => `<span> ● ${item}</span>`)
        .join("");

      circleContent.className = "text-[16px] whitespace-normal leading-relaxed";
      circleContent.style.color = `#${color}`;

      circleImg.src = img;

      const rect = target.getBoundingClientRect();
      const parentRect = target.offsetParent.getBoundingClientRect();

      const top = rect.top - parentRect.top - circle.offsetHeight - 10;
      const left =
        rect.left - parentRect.left + rect.width / 2 - circle.offsetWidth / 2;

      circle.style.top = `${top}px`;
      circle.style.left = `${left}px`;
      circle.classList.remove("hidden");
    });

    // pointer.addEventListener("mouseleave", () => {
    //   circle.classList.add("hidden");
    // });
  });
});
