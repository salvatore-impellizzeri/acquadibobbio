<article class="product pt-h">
    <div class="text-center product__title font-64">
        <h1 class="uppercase"><?= $item->title ?></h1>
        <div class="font-secondary fw-light font-20"><?= $item->subname ?? ''?></div>
    </div>
    <?php if (!empty($images['preview'])): ?>
        <div class="product__preview m-auto mb-251">
            <img src="<?= $this->Frontend->image($images['preview']->path) ?>" alt="<?= h($images['preview']->title) ?>">
        </div>
    <?php endif; ?>

    <div class="product__description font-48 mb-307 text-center m-auto container-paragraph">
        <?php echo $item->description ?>
    </div>

    <?php 
        $elements = [
            [
                'name' => $elemento_1,
                'text' => $info_element_1
            ],
            [
                'name' => $elemento_2,
                'text' => $info_element_2
            ],
            [
                'name' => $elemento_3,
                'text' => $info_element_3
            ],
        ]
    ?>

    <?php if (!empty($images['gallery_2'])): ?>
        <div class="product__gallery container-m m-auto mb-224">
            <?php echo $this->element('gallery', [
                'images' => $images['gallery_2'],
                'elements' => $elements
            ]) ?>
        </div>
    <?php endif; ?>

    <?= $this->element('triple-img', [
        'images' => $images['gallery_1'],
        'extraClass' => 'triple-img--products'
    ]) ?>
</article>
