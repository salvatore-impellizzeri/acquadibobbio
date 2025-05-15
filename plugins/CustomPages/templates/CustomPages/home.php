<div class="home">

    <!-- HERO -->
    <div class="home__hero container-fluid">
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
        'titleClass' => 'font-64 mb-134'
    ]) ?>

    <!-- NEW PRODUCT -->
    <?= $this->element('info', [
        'title' => $item->string_4,
        'text' => $item->text_1,
        'label' => $item->string_6, 
        'url' => '#'
    ]) ?>
</div>