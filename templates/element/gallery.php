<?php if (!empty($images) && count($images) === count($elements)): ?>
    <div class="gallery">
        <?php foreach (array_values($images) as $i => $img): ?>
            <div class="gallery__element elementAnimation-<?= $i ?>" data-animated>
                <?php $element = $elements[$i]; ?>
                <div class="gallery__img">
                    <img src="<?= $this->Frontend->image($img->path) ?>" alt="<?= $img->title ?>">
                    <h1><?= $element['name'] ?? '' ?></h1>
                </div>
                <p>
                    <?= $element['text'] ?? '' ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
