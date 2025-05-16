<div class="img-text container-l m-auto">
    <div class="img-text__img">
        <img src="<?= $this->Frontend->image($img) ?>" alt="<?= $alt ?>">
        <div class="img-text__img__word-1">
            <?= $word_1 ?>
        </div>
        <div class="img-text__img__word-2">
            <?= $word_2 ?>
        </div>
    </div>
    <div class="img-text__text">
        <h2 class="font-64"><?= $title ?></h2>
        <?= $text ?>
        <?php if(isset($cta)) { ?>
            <?= $this->element('cta', [
                'label' => $cta,
                'url' => $url
            ]) ?>
        <?php } ?>    
    </div>
</div>