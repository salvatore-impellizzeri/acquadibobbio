<div class="triple-img <?= $extraClass ?? '' ?>">
    <?php foreach (array_values($images) as $i => $img) { ?>
        <img class="<?= $animation ?? '' ?>TripleImg-<?= $i ?>" data-animated src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?>">
    <?php } ?>
</div>