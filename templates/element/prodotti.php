<?php $products = $queryBuilder->get('Products.Products')
    ->find()
    ->where(['Products.published' => true])
    ->contain(['Preview'])
    ->all();
?>

<div class="prodotti <?= $extraClass ?? "" ?>">
    <div class="font-64 <?= isset($text) && $text ? 'mb-134' : '' ?>">
       <?= $this->element('title', [
        'title' => $title,
        'text' => $text ?? null,
        'extraClass' => $titleExtraClass ?? null,
        'titleClass' => $titleClass ?? null,
        'textAnimation' => $textAnimation ?? null,
       ]); ?>
    </div>
    <div class="prodotti__cols">
        <?php foreach ($products as $product) { ?>
            <a href="<?= $this->Frontend->url('/products/view/' . $product->id); ?>" class="prodotti__item <?= $productsAnimation ?? '' ?>" data-animated>
                <div class="prodotti__img">
                    <?php if($product->preview->path): ?>
                        <img src="<?= $this->Frontend->resize($product->preview->path, 414 * 2); ?>" alt="<?= $product->title ?>">
                    <?php endif; ?>
                </div>
                <?= $this->element('cta', [
                    'label' => $product->title
                ]) ?>
            </a>
        <?php } ?>
    </div>
</div>