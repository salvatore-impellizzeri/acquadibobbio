<?php $products = $queryBuilder->get('Products.Products')
    ->find()
    ->where(['Products.published' => true])
    ->contain(['Preview'])
    ->all();
?>

<div class="prodotti text-center container-prodotti m-auto">
    <div class="font-64 <?= $description ? 'mb-134' : '' ?>">
        <h1 class="m-auto <?= $titleClass ?? '' ?> ">
            <?= $title ?>
        </h1>
        <?php if(isset($description)) { ?>
            <?= $description ?>
        <?php } ?>
    </div>
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