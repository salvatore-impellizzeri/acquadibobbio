<?php if (empty($label)) return; ?>

<?php if (!empty($url)) : ?>
    <a class="cta <?= $extraClass ?? '' ?>" href="<?= $url ?>">
        <span class="cta__label font-secondary">
            <?= $label ?>
        </span>
    </a>
<?php else : ?>
    <button class="cta <?= $extraClass ?? '' ?>" type="submit">
        <span class="cta__label font-secondary">
            <?= $label ?>
        </span>
    </button>
<?php endif; ?>