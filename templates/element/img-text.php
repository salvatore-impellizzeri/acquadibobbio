<div class="img-text container-l m-auto <?= $extraClass ?? '' ?>">
    <div class="img-text__img">
        <?php if($img): ?>
            <img src="<?= $this->Frontend->image($img) ?>" alt="<?= $alt ?>">
        <?php endif; ?> 
        <div class="img-text__img__word-1">
            <?= $word_1 ?? '' ?>
        </div>
        <div class="img-text__img__word-2">
            <?= $word_2 ?? '' ?>
        </div>
    </div>
    <div class="img-text__text">
        <h2 class="font-64"><?= $title ?? '' ?></h2>
        <?= $text ?? '' ?>
        <?php if(isset($cta)) { ?>
            <?= $this->element('cta', [
                'label' => $cta,
                'url' => $url
            ]) ?>
        <?php } ?>    
    </div>
</div>