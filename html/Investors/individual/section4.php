<?php
$data = [
    [
        "image" => "img/session4/img01.webp",
        "alt" => "ビューティケア分野 ( Beauty care )",
        "label" => "ビューティケア分野（Beauty care）",
        "bg-label" => "#EB6898",
        "title" => "肌や髪の毛の「キレイ」をお手伝い",
        "desc" => "リン脂質素材・機能性油剤・生理活性物質の3素材を提供しております。いろんな化粧品の中に、日本精化の製品は使われています。きっとあなたも使ったことがや触れたことがあるはずです。"
    ],
    [
        "image" => "img/session4/img02.webp",
        "alt" => "ヘルスケア分野 ( Healthcare )",
        "label" => "ヘルスケア分野 ( Healthcare )",
        "bg-label" => "#1EA4DE",
        "title" => "身体の「キレイ（健康）」をお手伝い",
        "desc" => "医薬用の素材やサービスを提供しております。\n 健康を支える多くの製品に、日本精化の製品やサービスが使われています。"
    ],
    [
        "image" => "img/session4/img03.webp",
        "alt" => "ファインケミカル分野 ( Fine chemicals )",
        "label" => "ファインケミカル分野 ( Fine chemicals )",
        "bg-label" => "#1AA64E",
        "title" => "未来の「キレイ」をお手伝い",
        "desc" => "コーティング剤やエレクトロニクス関連素材など様々な機能性素材を提供しております。幅広い分野の産業に、日本精化の製品が使われています。"
    ],
    [
        "image" => "img/session4/img04.webp",
        "alt" => "ハイジーン分野 ( Hygiene )",
        "label" => "ハイジーン分野 ( Hygiene )",
        "bg-label" => "#004EA2",
        "title" => "環境の「キレイ（清潔）」をお手伝い",
        "desc" => "「洗浄」「殺菌」「消毒」に関する環境衛生製品を提供しております。日本精化グループの製品は、清潔で安全・快適な環境づくりに貢献しています。"
    ]
]
?>


<section id="section" class="relative z-0 w-full mx-auto bg-no-repeat bg-cover"
         style="background-image: url('img/session4/bg.webp')">
    <div class="max-w-[972px] mx-auto px-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 gap-6 lg:gap-7 py-32">
            <!-- Beauty Care Card-->
            <?php foreach ($data as $item) : ?>
                <div class="bg-white rounded-2xl border-2 hover:border-blue-850 overflow-hidden shadow-sm transition
                    p-4 duration-700 ease-in-out hover:scale-[1.02] cursor-pointer ">
                    <div class="relative">
                        <img src="<?php echo htmlspecialchars($item['image']); ?>"
                             alt="<?php echo htmlspecialchars($item['alt']); ?>"
                             class="w-full aspect-[432/260] object-cover"/>
                        <div class="text-white px-4 py-2" style="background-color: <?= htmlspecialchars($item['bg-label']) ?>;">
                            <span class="text-[17px] lg:text-xl font-bold"><?php echo htmlspecialchars($item['label']); ?></span>
                        </div>
                    </div>
                    <div class="py-4">
                        <h3 class="font-bold text-[19px] xs:text-xl mb-2"><?php echo htmlspecialchars($item['title']); ?></h3>
                        <p class="md:h-[91px] text-sm xs:text-base mb-4 leading-relaxed tracking-widest">
                            <?php echo htmlspecialchars($item['desc']); ?>
                        </p>
                        <button class="flex justify-center items-center bg-blue-850 hover:scale-105 text-white
                            py-[11px] px-[41px] rounded-full text-lg font-bold transition-colors">
                            詳細はこちら
                            <span class="ml-1.5">
                            <img src="img/icon/arrow-right.svg" alt="Arrow right" class="w-[11px] h-2 object-contain"/>
                        </span>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>

    </div>


</section>