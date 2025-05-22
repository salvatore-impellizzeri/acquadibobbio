<?php foreach ($menuItems as $item) { ?>
    <a href="<?= $item->url ?>">
        <?= $this->Frontend->svg("icons/$item->title.svg"); ?>
    </a>
<?php } ?>
