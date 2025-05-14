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
                        Dettagli prodotto
                    </legend>
                    <?php echo $this->Form->control('string_1', ['label' => 'Titolo', 'extraClass' => 'span-10']); ?>
                    <?php echo $this->Form->editor('text_1', ['label' => 'Testo', 'class' => 'span-6']); ?> 

                    <?php echo $this->Form->control('string_2', ['label' => 'Primo dettaglio', 'extraClass' => 'span-10']); ?>
                    <?php echo $this->Form->editor('text_2', ['label' => 'Info primo dettaglio', 'class' => 'span-6']); ?> 

                    <?php echo $this->Form->control('string_3', ['label' => 'Secondo dettaglio', 'extraClass' => 'span-10']); ?>
                    <?php echo $this->Form->editor('text_3', ['label' => 'Info secondo dettaglio', 'class' => 'span-6']); ?> 

                    <?php echo $this->Form->control('string_4', ['label' => 'Terzo dettaglio', 'extraClass' => 'span-10']); ?>
                    <?php echo $this->Form->editor('text_4', ['label' => 'Info terzo dettaglio', 'class' => 'span-6']); ?> 

                    <?php echo $this->Form->control('string_5', ['label' => 'Quarto dettaglio', 'extraClass' => 'span-10']); ?>
                    <?php echo $this->Form->editor('text_5', ['label' => 'Info quarto dettaglio', 'class' => 'span-6']); ?> 
                </fieldset>
            </div>
            <?php echo $this->element('admin/tab-seo');?>
			<?php echo $this->element('admin/tab-social');?>            
        </div>
    </div>

<?php echo $this->element('admin/save');?>
