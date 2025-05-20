<ul class="list m-auto font-secondary uppercase <?= $extraClass ?? '' ?>">
    <?php foreach ($list as $item): ?>
        <li>
            <span class="list__info"><?= $item['detail'] ?? '' ?></span>
            <span class="list__description"><?= $item['info'] ?? '' ?></span>
        </li>
    <?php endforeach; ?>
</ul>
