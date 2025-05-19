<ul class="list m-auto font-secondary uppercase <?= $extraClass ?? '' ?>">
    <?php foreach ($list as $item): ?>
        <li>
            <label class="fw-medium"><?= $item['detail'] ?? '' ?></label>
            <span class="fw-book"><?= $item['info'] ?? '' ?></span>
        </li>
    <?php endforeach; ?>
</ul>
