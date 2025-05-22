<?php foreach ($menuItems as $item) { ?>
    <a href="#">
        <?= $this->Frontend->svg("icons/$item->title.svg"); ?>
    </a>
<?php } ?>