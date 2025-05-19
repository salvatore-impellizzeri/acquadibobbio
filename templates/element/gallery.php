<?php if (!empty($images) && count($images) === count($elements)): ?>
    <div class="gallery">
        <?php foreach (array_values($images) as $i => $img): ?>
            <?php $element = $elements[$i]; ?>
            <div data-fancybox="gallery" class="gallery__img">
                <img src="<?= $this->Frontend->image($img->path) ?>" alt="<?= $img->title ?>">
                <h1><?= $element['name'] ?? '' ?></h1>
                <p><?= $element['text'] ?? '' ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
