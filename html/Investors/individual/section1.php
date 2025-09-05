<div class="relative">
    <div class="max-w-full mx-auto relative z-20">
        <div class="relative">
            <div class="max-w-[1589px] mx-auto text-center mt-0 sm:-mt-20 relative">
                <img src="<?= asset('html/investors/individual/images/title-section1.webp') ?>"
                    alt="ポインター"
                    class="w-[38%] aspect-auto absolute top-[13%] left-1/2 -translate-x-1/2 cursor-pointer opacity-0 animate-fadeIn [animation-delay:1s]" />

                <img src="<?= asset('html/investors/individual/images/car.webp') ?>"
                    alt="ポインター"
                    class="w-[2%] aspect-auto absolute top-[82%] left-[26%] cursor-pointer" />

                <img src="<?= asset('html/investors/individual/images/group1.webp') ?>"
                    alt="ポインター"
                    class="w-[8%] aspect-auto absolute top-[68%] left-[23%] cursor-pointer hover:animate-slowJump" />

                <img src="<?= asset('html/investors/individual/images/train.webp') ?>"
                    alt="ポインター"
                    class="w-[11%] aspect-auto absolute top-[81%] left-[52%] cursor-pointer" />

                <img src="<?= asset('html/investors/individual/images/group2.webp') ?>"
                    alt="ポインター"
                    class="w-[8%] aspect-auto absolute top-[67%] left-[49%] cursor-pointer hover:animate-slowJump" />

                <img src="<?= asset('html/investors/individual/images/house1.webp') ?>"
                    alt="ポインター"
                    class="w-[11%] aspect-auto absolute top-[49%] left-[53%] cursor-pointer" />

                <img src="<?= asset('html/investors/individual/images/group3.webp') ?>"
                    alt="ポインター"
                    class="w-[8%] aspect-auto absolute top-[36%] left-[53%] cursor-pointer hover:animate-slowJump" />

                <img src="<?= asset('html/investors/individual/images/house2.webp') ?>"
                    alt="ポインター"
                    class="w-[6%] aspect-auto absolute top-[78%] left-[79%] cursor-pointer" />

                <img src="<?= asset('html/investors/individual/images/group4.webp') ?>"
                    alt="ポインター"
                    class="w-[8%] aspect-auto absolute top-[64%] left-[78%] cursor-pointer hover:animate-slowJump" />

                <img src="<?= asset('html/investors/individual/images/house3.webp') ?>"
                    alt="ポインター"
                    class="w-[6%] aspect-auto absolute top-[53%] left-[92%] cursor-pointer" />

                <img src="<?= asset('html/investors/individual/images/group5.webp') ?>"
                    alt="ポインター"
                    class="w-[8%] aspect-auto absolute top-[38%] left-[91%] cursor-pointer hover:animate-slowJump" />

                <p class="absolute top-[26%] left-1/2 -translate-x-1/2 font-bold sm:text-[16px] text-[10px] opacity-0 animate-fadeIn [animation-delay:1s]">
                    「カガク」と「キレイ」のチカラで笑顔あふれる未来を。
                </p>
                <img src="<?= asset('html/investors/individual/images/bg-section1.webp') ?>" alt="house" class="mx-auto cursor-pointer">
            </div>
        </div>
    </div>
</div>

<div class="relative mt-4">
    <div class="max-w-full mx-auto relative z-20">
        <div class="relative">
            <div class="max-w-[1589px] mx-auto text-center mt-0 sm:-mt-20 relative">
                <img src="<?= asset('html/investors/individual/images/bg-section2.webp') ?>" alt="background-section2" class="mx-auto cursor-pointer">
                <div class="aspect-auto absolute top-[8%] left-1/2 -translate-x-1/2 w-full flex justify-center flex-col">
                    <p class="text-[40px] font-bold text-[#0A4BA0]">
                        日本精化とは
                    </p>
                    <div class="pt-8 lg:text-[20px] md:text-[16px] font-semibold text-[#414042] text-center md:px-[360px] leading-[40px]">
                        1918年、樟脳製造から始まり、化学品・機能性原料メーカーとして100年以上の歩みを重ねてきた日本精化。環境・安全・品質に配慮しながら、国内外で事業を拡大してきました。これからも「人と社会の豊かさに貢献する企業」として、革新的な素材開発とグローバル展開を通じ、
                    </div>
                    <div class="lg:text-[20px] md:text-[16px] font-semibold text-[#414042] text-center leading-[40px]">
                        サステナブル社会を切り拓いていきます。
                    </div>


                    <div class="relative mx-auto w-[920px] h-[484px] mt-20">
                        <!-- Container riêng cho thumbnail + video -->
                        <div class="relative w-full h-full">
                            <!-- Thumbnail -->
                            <img id="thumbnail" src="<?= asset('html/investors/individual/images/thumbnail.webp') ?>" alt="thumbnail"
                                class="absolute top-0 left-0 w-full h-full object-cover rounded z-10" />

                            <!-- Video -->
                            <video id="myVideo" class="w-full h-full rounded z-5" poster="<?= asset('html/investors/individual/images/path.webp') ?>">
                                <source src="<?= asset('html/investors/individual/images/video_jp.mp4') ?>" type="video/mp4">
                            </video>

                            <!-- Nút play căn giữa thumbnail/video -->
                            <img src="<?= asset('html/investors/individual/images/play_rotate.webp') ?>" alt="play-video"
                                class="w-[225px] absolute top-[70%] left-[40%] z-30 rounded-full object-cover spin-slow cursor-pointer playBtn" />
                            <img src="<?= asset('html/investors/individual/images/path.webp') ?>" alt="play-video"
                                class="absolute top-[89%] left-[50%] z-40 object-cover cursor-pointer playBtn" />
                        </div>

                        <!-- lv.webp vẫn nằm bên phải -->
                        <img src="<?= asset('html/investors/individual/images/lv.webp') ?>" alt="lv"
                            class="absolute -top-[5.7rem] right-0 object-cover rounded z-20" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const video = document.getElementById('myVideo');
    const thumbnail = document.getElementById('thumbnail');
    const playBtns = document.querySelectorAll('.playBtn');

    playBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            video.play();
            thumbnail.style.display = 'none';
            playBtns.forEach(b => b.style.display = 'none');
        });
    });
</script>