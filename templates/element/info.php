<div class="info container-text m-auto text-center <?= $extraClass ?? '' ?>">
    <h2 class="font-64">
        <?= $title ?>
    </h2>
    <?= $text ?>
    <?php if(isset($cta)): ?>
        <?= $this->element('cta', [
            'label' => $label,
            'url' => $url
        ]); ?>
    <?php endif; ?>
</div>