<?php $products = $queryBuilder->get('Products.Products')
    ->find()
    ->where(['Products.published' => true])
    ->contain(['Preview'])
    ->all();
?>

<div class="prodotti text-center container-prodotti m-auto pt-h">
    <h1 class="<?= $titleClass ?? '' ?> m-auto">
        <?= $title ?>
    </h1>
    <?php if(isset($description)) { ?>
        <p>
            <?= $description ?>
        </p>
    <?php } ?>
    <div class="prodotti__cols">
        <?php foreach ($products as $product) { ?>
            <div class="prodotti__item">
                <div class="prodotti__img">
                    <img src="<?= $this->Frontend->resize($product->preview->path, 414 * 2); ?>" alt="<?= $product->title ?>">
                </div>
                <?= $this->element('cta', [
                    'label' => $product->title
                ]) ?>
            </div>
        <?php } ?>
    </div>
</div>