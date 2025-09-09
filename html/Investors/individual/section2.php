<section class="relative mt-4">
    <div class="max-w-full mx-auto relative z-20">
        <div class="relative">
            <div class="max-w-[1920px] mx-auto text-center relative">
                <img src="<?= asset('html/investors/individual/images/section2/bg-section2.webp') ?>" alt="background-section2" class="aspect-auto mx-auto cursor-pointer">
                <div class="aspect-auto w-full flex justify-center flex-col xl:px-[360px] px-4">
                    <p class="md:text-[40px] text-[30px] font-bold text-[#0A4BA0]">
                        日本精化とは
                    </p>
                    <div class="md:pt-8 pt-6 lg:text-[20px] md:text-[16px] text-[14px] font-semibold text-[#414042] text-center md:leading-[40px] leading-[30px] px-2">
                        1918年、樟脳製造から始まり、化学品・機能性原料メーカーとして100年以上の歩みを重ねてきた日本精化。環境・安全・品質に配慮しながら、国内外で事業を拡大してきました。これからも「人と社会の豊かさに貢献する企業」として、革新的な素材開発とグローバル展開を通じ、
                    </div>
                    <div class="lg:text-[20px] md:text-[16px] text-[14px] font-semibold text-[#414042] text-center leading-[40px] px-2">
                        サステナブル社会を切り拓いていきます。
                    </div>


                    <div class="relative xl:mx-auto xl:max-w-[868px] w-full md:h-[484px] h-[400px] mt-20">
                        <div class="relative w-full h-full">
                            <img id="thumbnail_pc" src="<?= asset('html/investors/individual/images/section2/thumbnail.webp') ?>" alt="thumbnail"
                                class="w-full aspect-auto absolute top-0 left-0 h-full object-cover rounded z-10 md:block hidden" />
                            <img id="thumbnail_sm" src="<?= asset('html/investors/individual/images/section2/thumbnail_sp.webp') ?>" alt="thumbnail"
                                class="w-full aspect-auto absolute top-0 left-0 object-cover rounded z-10 md:hidden block" />
                            <video id="myVideo" class="w-full h-full rounded z-5" poster="<?= asset('html/investors/individual/images/section2/path.webp') ?>">
                                <source src="<?= asset('html/investors/individual/images/section2/video_jp.mp4') ?>" type="video/mp4">
                            </video>
                            <div class="absolute md:top-[75%] top-[70%] left-1/2 -translate-x-1/2 z-30">
                                <img src="<?= asset('html/investors/individual/images/section2/play_rotate.webp') ?>"
                                    alt="play-video"
                                    class="max-w-[140px] md:max-w-[225px] rounded-full object-cover spin-slow cursor-pointer playBtn relative" />
                                <img src="<?= asset('html/investors/individual/images/section2/path.webp') ?>"
                                    alt="play-video"
                                    class="relative left-1/2 -translate-x-1/2 w-[40px] md:w-[60px] object-cover cursor-pointer playBtn z-[50] md:-mt-36 -mt-[5.7rem]" />
                            </div>
                        </div>
                        <img src="<?= asset('html/investors/individual/images/section2/lv.webp') ?>" alt="lv"
                            class="md:w-[17%] w-[30%] aspect-auto absolute md:-top-[5.7rem] -top-[4rem] right-0 object-cover rounded z-20" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>