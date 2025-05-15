<div class="info container-text m-auto text-center">
    <h2 class="font-64">
        <?= $title ?>
    </h2>
    <?= $text ?>
    <?= $this->element('cta', [
        'label' => $label,
        'url' => $url
    ]); ?>
</div>