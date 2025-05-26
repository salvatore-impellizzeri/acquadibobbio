<div class="home">
    <!-- HERO -->
    <div class="home__hero">
        <video src="video/ADB_Hero.mp4" autoplay muted loop playsinline></video>
        <div class="home__hero__content zoomInCustom" data-animated>
            <div class="home__hero__img opacityDelay-1" data-animated>
                <img src="img/logo.svg" alt="Logo Acqua di Bobbio">
            </div>
            <h1 class="opacityDelay-1" data-animated><?= $item->string_1 ?? '' ?></h1>
            <h4 class="opacityDelay-1" data-animated><?= $item->string_2 ?? '' ?></h4>
        </div>
        <div class="home__hero__scroll pulse" data-animated>
            Scroll <?= $this->Frontend->svg('icons/arrow-down.svg') ?>
        </div>
    </div>

    <!-- PRODOTTI -->
    <?= $this->element('prodotti', [
        'title' => $item->string_3,
        'titleClass' => 'font-64 mb-134 pt-h fadeFromLeft',
        'productsAnimation' => 'fadeFromRight',
        'extraClass' => 'mb-214'
    ]) ?>

    <!-- NEW PRODUCT -->
    <div class="home__new-product">
        <?= $this->element('info', [
            'title' => $item->string_4,
            'text' => $item->text_1,
            'label' => $item->string_5, 
            'url' => '/products/view/1',
        ]) ?>
        <div class="home__new-product__images">
            <?php
                if(!empty($images['gallery-1'])) {
                    foreach ($images['gallery-1'] as $img) { ?>
                        <img src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?>">
            <?php 
                    }
                } 
            ?>
        </div>
    </div>

    <!-- BIG IMG -->
    <?= $this->element('big-img', [
        'img' => $images['image-2'],
        'text' => $item->text_2,
        'extraClass' => 'mb-193'
    ]) ?>

    <!-- CONTATTACI -->
    <?= $this->element('img-text', [
        'img' => $images['image-3']['path'],
        'alt' => $images['image-3']['title'],
        'title' => $item->string_6,
        'text' => $item->text_3,
        'cta' => $item->string_7,
        'url' => '/custom-pages/view/2',
        'word_1' => $item->string_8,
        'word_2' => $item->string_9,
        'extraClass' => 'mb-175'
    ]) ?>

    <!-- GALLERY LOOP -->
    <?php
        $gallery = $images['gallery-2'];
        while (count($gallery) < 8) {
            $gallery = array_merge($gallery, $images['gallery-2']);
        }
    ?>

    <div class="swiper swiper--loop">
        <div class="swiper-wrapper">
            <?php foreach ($gallery as $img) { ?>
                <?php if($img['path']): ?>
                    <div class="swiper-slide">
                        <img src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?>">
                    </div>
                <?php endif; ?>
            <?php } ?>
        </div>
    </div>
</div>