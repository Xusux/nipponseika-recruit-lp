<?php
$data = [
    [
        "image" => "images/section4/img01.webp",
        "alt" => "ビューティケア分野 ( Beauty care )",
        "label" => "ビューティケア分野（Beauty care）",
        "bg-label" => "#EB6898",
        "title" => "肌や髪の毛の「キレイ」をお手伝い",
        "desc" => "リン脂質素材・機能性油剤・生理活性物質の3素材を提供しております。いろんな化粧品の中に、日本精化の製品は使われています。きっとあなたも使ったことがや触れたことがあるはずです。"
    ],
    [
        "image" => "images/section4/img02.webp",
        "alt" => "ヘルスケア分野 ( Healthcare )",
        "label" => "ヘルスケア分野 ( Healthcare )",
        "bg-label" => "#1EA4DE",
        "title" => "身体の「キレイ（健康）」をお手伝い",
        "desc" => "医薬用の素材やサービスを提供しております。\n 健康を支える多くの製品に、日本精化の製品やサービスが使われています。"
    ],
    [
        "image" => "images/section4/img03.webp",
        "alt" => "ファインケミカル分野 ( Fine chemicals )",
        "label" => "ファインケミカル分野 ( Fine chemicals )",
        "bg-label" => "#1AA64E",
        "title" => "未来の「キレイ」をお手伝い",
        "desc" => "コーティング剤やエレクトロニクス関連素材など様々な機能性素材を提供しております。幅広い分野の産業に、日本精化の製品が使われています。"
    ],
    [
        "image" => "images/section4/img04.webp",
        "alt" => "ハイジーン分野 ( Hygiene )",
        "label" => "ハイジーン分野 ( Hygiene )",
        "bg-label" => "#004EA2",
        "title" => "環境の「キレイ（清潔）」をお手伝い",
        "desc" => "「洗浄」「殺菌」「消毒」に関する環境衛生製品を提供しております。日本精化グループの製品は、清潔で安全・快適な環境づくりに貢献しています。"
    ]
]
?>

<section class="relative mt-20">
    <div class="max-w-full mx-auto relative z-20">
        <div class="relative">
            <div class="max-w-[1140px] mx-auto text-center mt-20 relative">
                <div id="circle" class="absolute z-50 hidden bg-white p-8 rounded-[50px] shadow-lg text-center pointer-events-none w-[26%] aspect-auto">
                    <div class="flex justify-center gap-8">
                        <h3 id="circle-title" class="font-bold text-[20px] text-left"></h3>
                        <img id="circle-img" src="" alt="" class="mx-auto w-[32%] aspect-auto">
                    </div>
                    <div id="circle-content"
                        class="text-[16px] whitespace-normal leading-relaxed"
                        style="color: rgb(51, 216, 112);"></div>
                </div>
                <img src="<?= asset('html/investors/individual/images/section4/person2.webp') ?>"
                    alt="ポインター"
                    class="w-[8%] aspect-auto absolute top-[39%] left-[25%] cursor-pointer animate-moveLeft" />

                <img src="<?= asset('html/investors/individual/images/section4/person1.webp') ?>"
                    alt="ポインター"
                    class="w-[6%] aspect-auto absolute top-[31%] left-[46%] cursor-pointer animate-moveRight" />

                <img src="<?= asset('html/investors/individual/images/section4/person3.webp') ?>"
                    alt="ポインター"
                    class="w-[10%] absolute top-[39%] left-[75%] cursor-pointer animate-smallJumpPerson" />

                <img src="<?= asset('html/investors/individual/images/section4/greenOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[45%] left-[3%] cursor-pointer pointer-target"
                    data-color="33D870" data-title="エビ養殖用の飼料" data-content='["コレステロール"]'
                    data-img="images/section4/hover1.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/blue.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[63%] left-[30%] cursor-pointer pointer-target"
                    data-color="33D870" data-title="手指消毒剤" data-content='["アルボナース™"]'
                    data-img="images/section4/hover2.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/blueOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[37%] left-[19%] cursor-pointer pointer-target"
                    data-color="005BAA" data-title="サプリメント" data-content='["コレステロール"]'
                    data-img="images/section4/hover3.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/blueOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[51%] left-[46%] cursor-pointer pointer-target"
                    data-color="005BAA" data-title="ニップルクリームなどのベビーケア製品" data-content='["ラノリン"]'
                    data-img="images/section4/hover4.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/pinkOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[19%] left-[21%] cursor-pointer pointer-target"
                    data-color="F16E9C" data-title="スキンケア" data-content='["機能性油剤","リン脂質","コレステロール","ビタミンC誘導体","生理活性物質"]'
                    data-img="images/section4/hover5.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/blue.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[19%] left-[26%] cursor-pointer pointer-target"
                    data-color="1BA4DE" data-title="薬用ハンドソープ" data-content='["アルボース薬用水石鹸","iグリーン（バイオマスボトル）"]'
                    data-img="images/section4/hover6.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/pink.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[10%] left-[46%] cursor-pointer pointer-target"
                    data-color="F16E9C" data-title="ヘアケア" data-content='["機能性油剤","エルカラクトン","ラノリン","ラノリン誘導体"]'
                    data-img="images/section4/hover7.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/pinkOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[12%] left-[54%] cursor-pointer pointer-target"
                    data-color="F16E9C" data-title="クレンジング" data-content='["機能性油剤","多糖類"]'
                    data-img="images/section4/hover8.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/blue.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[14%] left-[61%] cursor-pointer z-20 pointer-target"
                    data-color="1BA4DE" data-title="抗炎症用の軟膏" data-content='["ラノリン"]'
                    data-img="images/section4/hover9.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/blueOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[12%] left-[64%] cursor-pointer pointer-target"
                    data-color="005BAA" data-title="医療用医薬品添加剤"
                    data-content='["高純度リン脂質","機能性リン脂質","Presome™","Liposome","研究開発サポートサービス","高純度コレステロール","Liposome"]'
                    data-img="images/section4/hover10.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/pink.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[13%] left-[75%] cursor-pointer pointer-target"
                    data-color="F16E9C" data-title="メイクアップ製品"
                    data-content='["機能性油剤","多糖類"]'
                    data-img="images/section4/hover11.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/pink.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[16%] left-[78%] cursor-pointer z-20 pointer-target"
                    data-color="F16E9C" data-title="メイクアップ製品"
                    data-content='["機能性油剤","リン脂質","多糖類"]'
                    data-img="images/section4/hover12.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/greenOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[43%] left-[85%] cursor-pointer z-20 pointer-target"
                    data-color="33D870" data-title="ペロブスカイト太陽電池"
                    data-content='["ペロブスカイト太陽電池正孔輸送材料"]'
                    data-img="images/section4/hover13.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/greenOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[44%] left-[69%] cursor-pointer z-20 pointer-target"
                    data-color="33D870" data-title="車体用防錆材"
                    data-content='["ラノリン"]'
                    data-img="images/section4/hover14.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/greenOpacity.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[28%] left-[62%] cursor-pointer z-20 pointer-target"
                    data-color="33D870" data-title="ポリ袋"
                    data-content='["脂肪酸アマイド"]'
                    data-img="images/section4/hover15.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/green.webp') ?>"
                    alt="ポインター"
                    class="w-[4%] aspect-auto absolute top-[28%] left-[57%] cursor-pointer z-20 pointer-target"
                    data-color="33D870" data-title="メガネ・サングラス・ゴーグルなど"
                    data-content='["各種樹脂用モノマー・塩素化物","コーティング剤（NSC）"]'
                    data-img="images/section4/hover15.webp" />

                <img src="<?= asset('html/investors/individual/images/section4/bg-house.webp') ?>" alt="house" class="mx-auto cursor-pointer">
            </div>
        </div>
    </div>
</section>
<section id="section4" class="relative z-0 w-full mx-auto bg-no-repeat bg-cover"
         style="background-image: url('images/section4/bg.webp')">
    <div class="max-w-[972px] mx-auto px-5 lg:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 gap-6 lg:gap-7 py-32">
            <!-- Beauty Care Card-->
            <?php foreach ($data as $item) : ?>
                <div class="bg-white rounded-2xl border-2 hover:border-blue-850 overflow-hidden shadow-sm transition
                    p-4 duration-700 ease-in-out hover:scale-[1.02] cursor-pointer">
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
                            <img src="images/icon/arrow-right.svg" alt="Arrow right" class="w-[11px] h-2 object-contain"/>
                        </span>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>