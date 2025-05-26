<div class="img-text <?= $extraClass ?? '' ?>">
    <div class="img-text__img imgWidth" data-animated>
        <?php if($img): ?>
            <img class="imgWidthIMG" data-animated src="<?= $this->Frontend->image($img) ?>" alt="<?= $alt ?>">
        <?php endif; ?> 
        <div class="img-text__img__word-1 opacity" data-animated>
            <?= $word_1 ?? '' ?>
        </div>
        <div class="img-text__img__word-2 opacity" data-animated>
            <?= $word_2 ?? '' ?>
        </div>
    </div>
    <div class="img-text__text fadeFromTop" data-animated>
        <h2><?= $title ?? '' ?></h2>
        <div class="img-text__text__paragraph">
            <?= $text ?? '' ?>
        </div>
        <?php if(isset($cta)) { ?>
            <?= $this->element('cta', [
                'label' => $cta,
                'url' => $url
            ]) ?>
        <?php } ?>    
    </div>
</div>