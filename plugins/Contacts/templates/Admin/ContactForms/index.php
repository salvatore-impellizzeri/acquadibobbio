<?php
$this->extend('/Admin/Common/index');
?>



<?= $this->Table->start() ?>
    <thead>
        <th>
            <?php echo $this->Table->defaultSort() ?>
        </th>
        <th class="main-column">
            <?= __d('admin', 'title') ?>
        </th>

        <?php if (TRANSLATION_ACTIVE): ?>
            <th></th>
        <?php endif; ?>

        <th>
            
        </th>
        <th></th>

    </thead>

    <?php echo $this->Table->dragStart() ?>
        <tr v-for="record in records" :key="record.id" v-cloak>
            <td class="drag">
                <?php echo $this->Table->dragHandle() ?>
            </td>
            <th scope="row">
                <?= $this->Table->editLink() ?>
            </th>

            <?php if (TRANSLATION_ACTIVE): ?>
                <td>
                    <?= $this->Table->translationStatus() ?>
                </td>
            <?php endif; ?>

            <td>
                <?= $this->Table->btn(__dx($po, 'admin', 'manage inputs'), $this->Url->build(['controller' => 'ContactFields', 'action' => 'list'])) ?>
            </td>
            <td>
                <div class="table__actions">
                    <?php echo $this->Table->editAction() ?>
                    <?php echo $this->Table->deleteAction() ?>
                </div>
            </td>

        </tr>

        <?= $this->Table->empty() ?>

    <?php echo $this->Table->dragEnd() ?>

<?= $this->Table->end() ?>
