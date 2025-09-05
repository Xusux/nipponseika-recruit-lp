<?php
$data = [
    [
        "image" => "images/section6/img01.webp",
        "alt" => "経営方針",
        "label" => "経営方針"
    ],
    [
        "image" => "images/section6/img02.webp",
        "alt" => "業績・財務情報",
        "label" => "業績・財務情報"
    ],
    [
        "image" => "images/section6/img03.webp",
        "alt" => "IRライブラリ",
        "label" => "IRライブラリ"
    ],
    [
        "image" => "images/section6/img04.webp",
        "alt" => "株式情報",
        "label" => "株式情報"
    ],
    [
        "image" => "images/section6/img05.webp",
        "alt" => "NFC VISION 2030",
        "label" => "NFC VISION 2030"
    ]
]
?>


<section id="section6" class="relative z-0 w-full h-full mx-auto bg-no-repeat bg-cover"
         style="background-image: url('images/section6/bg.webp')">
    <div class="max-w-[872px] mx-auto px-5 lg:px-0">
        <h2 class="text-center text-[40px] text-white py-[56px] font-bold drop-shadow-lg">もっと詳しく知りたい方へ</h2>

        <div class="pb-16">
            <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 gap-y-8 gap-6 lg:gap-8">
                <?php foreach ($data as $item) : ?>
                    <div class="bg-white rounded-2xl py-[19px] text-center shadow-sm transition duration-700 ease-in-out hover:scale-[1.02]">
                        <div class="flex justify-center items-center mb-5">
                            <img src="<?php echo htmlspecialchars($item['image']); ?>"
                                 alt="<?php echo htmlspecialchars($item['alt']); ?>"
                                 class="h-[80px] object-contain">
                        </div>
                        <h3 class="text-[28px] s2:text-3xl xs:text-xl font-semibold text-blue-850"><?php echo htmlspecialchars($item['label']); ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>