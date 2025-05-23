<?php
    $this->extend('/Admin/Common/edit');
?>

<?= $this->Form->create($item, ['type' => 'file', 'id' => 'superForm']) ?>

    <div class="tabs" data-tabs>
        <?php echo $this->element('admin/tabs-menu');?>
        <div class="tabs__content">
            <div class="tabs__tab" data-tab="edit">
                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Generali
                    </legend>
                    <?php
                    echo $this->Form->control('title', ['label' => __d('admin', 'title'), 'extraClass' => 'span-10']);
                    echo $this->Form->control('published', ['label' => __d('admin', 'published'), 'type' => 'checkbox', 'extraClass' => 'span-1']);
                    ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Hero
                    </legend>
                    <?php echo $this->Form->control('string_1', ['label' => 'Titolo', 'extraClass' => 'span-12']); ?>
                    <?php echo $this->Form->control('string_2', ['label' => 'Sottotitolo', 'extraClass' => 'span-12']); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Sezione prodotti
                    </legend>
                    <?php echo $this->Form->control('string_3', ['label' => 'Titolo', 'extraClass' => 'span-12']); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Nuovo prodotto
                    </legend>
                    <?php echo $this->Form->control('string_4', ['label' => 'Titolo', 'extraClass' => 'span-12']); ?>
                    <?php echo $this->Form->editor('text_1', ['label' => 'Testo', 'class' => 'span-12']); ?>
                    <?php echo $this->Form->inlineEditor('string_5', ['label' => 'Bottone', 'class' => 'span-12']); ?> 
                    <?php echo $this->element('admin/uploader/gallery', ['scope' => 'gallery-1', 'title' => 'Immagini nuovo prodotto']); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Prima immagine statica
                    </legend>
                    <?php echo $this->Form->editor('text_2', ['label' => 'Testo', 'class' => 'span-6']); ?> 
                    <?php echo $this->element('admin/uploader/image', ['scope' => 'image-2', 'title' => 'Immagine', 'width' => 1920,  'mobile' => ['width' => 480, 'height' => 890]]); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Seconda immagine statica
                    </legend>
                    <?php echo $this->Form->control('string_6', ['label' => 'Titolo', 'extraClass' => 'span-12']); ?>
                    <?php echo $this->Form->editor('text_3', ['label' => 'Testo', 'class' => 'span-10']); ?> 
                    <?php echo $this->Form->control('string_7', ['label' => 'Bottone', 'extraClass' => 'span-12']); ?>
                    <?php echo $this->element('admin/uploader/image', ['scope' => 'image-3', 'title' => 'Immagine', 'width' => 1076,  'mobile' => ['width' => 480, 'height' => 890]]); ?>
                    <?php echo $this->Form->control('string_8', ['label' => 'Primo testo Immagine', 'extraClass' => 'span-12']); ?>
                    <?php echo $this->Form->control('string_9', ['label' => 'Secondo testo Immagine', 'extraClass' => 'span-12']); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Carosello in loop
                    </legend>
                    <?php echo $this->element('admin/uploader/gallery', ['scope' => 'gallery-2', 'title' => 'Galleria immagini']); ?>
                </fieldset>

            </div>
            <?php echo $this->element('admin/tab-seo');?>
			<?php echo $this->element('admin/tab-social');?>            
        </div>
    </div>

<?php echo $this->element('admin/save');?>
