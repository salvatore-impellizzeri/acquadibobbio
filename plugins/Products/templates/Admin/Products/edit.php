<?php $this->extend('/Admin/Common/edit');?>

<?= $this->Form->create($item) ?>
    <div class="tabs" data-tabs>
        <?php echo $this->element('admin/tabs-menu');?>
        <div class="tabs__content">
            <div class="tabs__tab" data-tab="edit">
                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Generali
                    </legend>
                    <?php
                        echo $this->Form->control('title', ['label' => __d('admin', 'title'), 'extraClass' => 'span-9']);
                        echo $this->Form->control('published', ['label' => __d('admin', 'published'), 'type' => 'checkbox', 'extraClass' => 'span-2']);
                    ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Contenuto
                    </legend>
                    <?php
                        echo $this->Form->control('subname', ['label' => "Sottotitolo"]);

                        echo $this->element('admin/uploader/image', [
                            'scope' => 'preview',
                            'title' => __d('admin', 'preview'),
                            'width' => 720 * 1.5,
                        ]);
                        
                        echo $this->Form->editor('description', ['label' => 'Descrizione']);

                        echo $this->element('admin/uploader/gallery', [
                            'scope' => 'gallery_1',
                        ]);
                    ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Elementi
                    </legend>
                    <?php
                        echo $this->Form->control('elemento_1', ['label' => "Primo elemento"]);
                        echo $this->Form->control('info_element_1', ['label' => 'Info primo elemento']);

                        echo $this->Form->control('elemento_2', ['label' => "Secondo elemento"]);
                        echo $this->Form->control('info_element_2', ['label' => 'Info Secondo elemento']);

                        echo $this->Form->control('elemento_3', ['label' => "Terzo elemento"]);
                        echo $this->Form->control('info_element_3', ['label' => 'Info Terzo elemento']);

                        
                        echo $this->element('admin/uploader/gallery', [
                            'scope' => 'gallery_2',
                        ]);
                    ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Dettagli
                    </legend>
                    <?php
                        echo $this->Form->control('title_details', ['label' => "Titolo dettagli"]);
                        echo $this->Form->editor('text_details', ['label' => "Descrizione dettagli"]);
                    ?>
        
                    <?php echo $this->Form->control('detail_1', ['label' => 'Primo dettaglio', 'class' => 'span-10']); ?>
                    <?php echo $this->Form->control('info_detail_1', ['label' => 'Info primo dettaglio', 'class' => 'span-10']); ?> 
        
                    <?php echo $this->Form->control('detail_2', ['label' => 'Secondo dettaglio', 'class' => 'span-10']); ?>
                    <?php echo $this->Form->control('info_detail_2', ['label' => 'Info secondo dettaglio', 'class' => 'span-10']); ?> 
        
                    <?php echo $this->Form->control('detail_3', ['label' => 'Terzo dettaglio', 'class' => 'span-10']); ?>
                    <?php echo $this->Form->control('info_detail_3', ['label' => 'Info terzo dettaglio', 'class' => 'span-10']); ?> 
        
                    <?php echo $this->Form->control('detail_4', ['label' => 'Quarto dettaglio', 'class' => 'span-10']); ?>
                    <?php echo $this->Form->control('info_detail_4', ['label' => 'Info quarto dettaglio', 'class' => 'span-10']); ?> 
                </fieldset>
            </div>
            <?php echo $this->element('admin/tab-seo');?>
			<?php echo $this->element('admin/tab-social');?>           
        </div>
    </div>
    <?php echo $this->element('admin/save');?>
<?= $this->Form->end() ?>
