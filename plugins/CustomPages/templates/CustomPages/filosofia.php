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
        'extraClass' => 'triple-img--secondary mb-175',
        'animation' => 'philosophy'
    ]) ?>

    <!-- NATURA -->
    <div class="m-auto mb-214">
        <?= $this->element('info', [
            'title' => $item->string_2,
            'text' => $item->text_2,
            'extraClass' => 'mb-148'
        ]) ?>
        <div class="cols-3">
            <?php foreach ($images['gallery-2'] as $img) { ?>
                <?php if($img['path']): ?>
                    <img class="scaleOut" data-animated src="<?= $this->Frontend->image($img['path']); ?>" alt="<?= $img['title'] ?>">
                <?php endif; ?>
            <?php } ?>
        </div>
    </div>

    <!-- PARAGRAFO -->
    <div class="paragraph fadeFromTop" data-animated>
        <?= $item->text_3 ?>
    </div>

    <!-- FOUNDER -->
    <?= $this->element('img-text', [
        'img' => $images['image-1']['path'],
        'alt' => $images['image-1']['title'],
        'title' => $item->string_3,
        'text' => $item->text_4,
        'word_1' => $item->string_4,
        'word_2' => $item->string_5,
        'extraClass' => 'mb-175 img-text--opacity'
    ]) ?>

    <!-- BIG IMG -->
    <?= $this->element('big-img', [
        'img' => $images['image-2'],
        'text' => $item->text_5
    ]) ?>
</div>