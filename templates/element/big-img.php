<div class="big-img text-center <?= $extraClass ?? '' ?>">
    <?php if($img['path']): ?>
        <img src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?>">
    <?php endif; ?>
    <?= $text ?? '' ?>
</div>