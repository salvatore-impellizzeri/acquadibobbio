<div class="triple-img <?= $extraClass ?? '' ?>">
    <?php foreach ($images as $img) { ?>
        <img src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?>">
    <?php } ?>
</div>