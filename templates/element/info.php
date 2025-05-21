<div class="info <?= $extraClass ?? '' ?>">
    <h2 class="font-64">
        <?= $title ?>
    </h2>
    <?= $text ?>
    <?php if(isset($label)): ?>
        <?= $this->element('cta', [
            'label' => $label,
            'url' => $url,
            'extraClass' => 'mt-40'
        ]); ?>
    <?php endif; ?>
</div>