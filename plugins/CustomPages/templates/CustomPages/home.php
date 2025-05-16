<div class="home">
    <!-- HERO -->
    <div class="home__hero">
        <video src="img/video/ADB_Hero.mp4" autoplay muted loop playsinline></video>
        <div class="home__hero__content container-hero text-center">
            <div class="home__hero__img mb-44">
                <img src="<?= $this->Frontend->image($images['logo']['path']); ?>" alt="<?= $images['logo']['title'] ?>">
            </div>
            <h1 class="font-96"><?= $item->string_1 ?></h1>
            <h4 class="font-20 fw-light font-secondary"><?= $item->string_2 ?></h4>
        </div>
        <div class="font-20 fw-book font-secondary home__hero__scroll text-center">
            Scroll <?= $this->Frontend->svg('icons/arrow-down.svg') ?>
        </div>
    </div>

    <!-- PRODOTTI -->
    <?= $this->element('prodotti', [
        'title' => $item->string_3,
        'titleClass' => 'font-64 mb-134 pt-h'
    ]) ?>

    <!-- NEW PRODUCT -->
    <div class="home__new-product">
        <?= $this->element('info', [
            'title' => $item->string_4,
            'text' => $item->text_1,
            'label' => $item->string_6, 
            'url' => '#'
        ]) ?>
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
        'title' => $item->string_5,
        'text' => $item->text_3,
        'cta' => $item->string_6,
        'url' => '#',
        'word_1' => $item->string_7,
        'word_2' => $item->string_8,
        'extraClass' => 'mb-175'
    ]) ?>

    <!-- GALLERY LOOP -->
    <div class="swiper swiper--loop">
        <div class="swiper-wrapper">
            <?php foreach ($images['gallery-2'] as $img) { ?>
                <div class="swiper-slide">
                    <img src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?>">
                </div>
            <?php } ?>
            <?php foreach ($images['gallery-2'] as $img) { ?>
                <div class="swiper-slide">
                    <img src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?>">
                </div>
            <?php } ?>
        </div>
    </div>
</div>