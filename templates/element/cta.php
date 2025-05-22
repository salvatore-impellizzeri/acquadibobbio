<?php if (empty($label)) return; ?>

<?php if (!empty($url)) : ?>
    <a class="cta fadeFromTopText <?= $extraClass ?? '' ?>" href="<?= $url ?>" data-animated>
        <span class="cta__label font-secondary">
            <?= $label ?>
        </span>
        <div class="cta__border"></div>
    </a>
<?php else : ?>
    <button class="cta fadeFromTopText <?= $extraClass ?? '' ?>" type="submit" data-animated>
        <span class="cta__label font-secondary">
            <?= $label ?>
        </span>
        <div class="cta__border"></div>
    </button>
<?php endif; ?>