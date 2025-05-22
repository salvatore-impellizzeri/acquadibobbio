<article class="product pt-h">

    <!-- TITOLO -->
    <div class="text-center product__title font-64">
        <h1 class="uppercase opacity" data-animated><?= $item->title ?></h1>
        <div class="font-secondary fw-light font-20 fadeFromTopText" data-animated><?= $item->subname ?? ''?></div>
    </div>
    <?php if (!empty($images['preview'])): ?>
        <div class="product__preview m-auto mb-251 imgWidthProduct" data-animated>
            <img src="<?= $this->Frontend->image($images['preview']->path) ?>" alt="<?= h($images['preview']->title) ?>">
        </div>
    <?php endif; ?>

    <!-- DESCRIZIONE -->
    <div class="product__description font-48 mb-307 text-center m-auto container-paragraph fadeFromTop" data-animated>
        <?php echo $item->description ?>
    </div>

    <!-- ELEMENTI -->
    <?php 
        $elements = [
            [
                'name' => $item->elemento_1,
                'text' => $item->info_element_1
            ],
            [
                'name' => $item->elemento_2,
                'text' => $item->info_element_2
            ],
            [
                'name' => $item->elemento_3,
                'text' => $item->info_element_3
            ],
        ]
    ?>

    <?php if (!empty($images['gallery_2'])): ?>
        <div class="product__gallery">
            <?php echo $this->element('gallery', [
                'images' => $images['gallery_2'],
                'elements' => $elements
            ]) ?>
        </div>
    <?php endif; ?>

    <!-- TRIPLE IMG -->
    <?= $this->element('triple-img', [
        'images' => $images['gallery_1'],
        'extraClass' => 'triple-img--products mb-245',
        'animation' => 'product'
    ]) ?>

    <!-- DETTAGLI -->
    <div class="mb-263">
        <?= $this->element('info', [
            'title' => $item->title_details,
            'text' => $item->text_details,
        ]) ?>
    </div>

    <!-- LISTA DETTAGLI -->
    <?php 
        $list = [
            [
                'detail' => $item->detail_1,
                'info' => $item->info_detail_1
            ],
            [
                'detail' => $item->detail_2,
                'info' => $item->info_detail_2
            ],
            [
                'detail' => $item->detail_3,
                'info' => $item->info_detail_3
            ],
            [
                'detail' => $item->detail_4,
                'info' => $item->info_detail_4
            ],
        ]
    ?>
    <?= $this->element('list', [
        'list' => $list,
        'extraClass' => 'mb-148'
    ]); ?>

    <div class="text-center mb-156">
        <?= $this->element('cta', [
            'label' => $item->button,
            'url' => '/custom-pages/view/2',
        ]); ?>
    </div>

    <!-- BIG IMG -->
    <?= $this->element('big-img', [
        'img' => 'img/video/video-2.mp4',
        'text' => $item->video_text,
        'video' => true,
    ]) ?>
</article>
