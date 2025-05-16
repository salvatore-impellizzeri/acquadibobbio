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
                        Contenuto
                    </legend>
                    <?php echo $this->Form->inlineEditor('string_1', ['label' => 'Titolo', 'extraClass' => 'span-12']); ?>
                    <?php echo $this->Form->editor('text_1', ['label' => 'Descrizione', 'extraClass' => 'span-12']); ?>
                </fieldset>

            </div>
            <?php echo $this->element('admin/tab-seo');?>
			<?php echo $this->element('admin/tab-social');?>            
        </div>
    </div>

<?php echo $this->element('admin/save');?>
