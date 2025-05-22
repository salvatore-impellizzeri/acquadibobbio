<div class="info <?= $extraClass ?? '' ?>">
    <h2 class="opacity" data-animated>
        <?= $title ?>
    </h2>
    <div class="fadeFromTopText info__text" data-animated>
        <?= $text ?>
    </div>
    <?php if(isset($label)): ?>
        <?= $this->element('cta', [
            'label' => $label,
            'url' => $url,
            'extraClass' => 'mt-40'
        ]); ?>
    <?php endif; ?>
</div>