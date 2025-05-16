<div class="pt-h">

    <!-- TITOLO -->
    <?= $this->element('title', [
        'title' => $item->string_1,
        'text' => $item->text_1,
        'extraClass' => 'mb-105'
    ]); ?>

    <!-- IMMAGINI -->
    <?= $this->element('triple-img', [
        'images' => $images['gallery-1'],
        'extraClass' => 'triple-img--secondary'
    ]) ?>
</div>