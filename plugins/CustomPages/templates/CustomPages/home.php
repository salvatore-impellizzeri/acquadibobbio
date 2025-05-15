<div class="home">

    <!-- HERO -->
    <div class="home__hero container-fluid">
        <video src="img/video/ADB_Hero.mp4" autoplay muted loop playsinline></video>
        <div class="home__hero__content container-hero py-64 px-92 text-center">
            <div class="home__hero__img">
                <img src="<?= $this->Frontend->image($images['logo']['path']); ?>" alt="<?= $images['logo']['title'] ?>">
            </div>
            <h1 class="font-96"><?= $item->string_1 ?></h1>
        </div>
    </div>
</div>