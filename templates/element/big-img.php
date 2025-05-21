<div class="big-img text-center <?= $extraClass ?? '' ?>">
    <?php if(isset($img['path']) && !isset($video)): ?>
        <img class="zoomIn" data-animated src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?? '' ?>">
    <?php elseif(isset($video)): ?>
        <video autoplay muted loop playsinline>
            <source src="<?= $img ?>" type="video/mp4">
        </video>
    <?php endif; ?>
    <?= $text ?? '' ?>
</div>
