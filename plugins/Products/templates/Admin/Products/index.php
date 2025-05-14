<?php
$this->extend('/Admin/Common/index');
?>

<?= $this->Table->start() ?>
    <thead>
		<th>
			<?php echo $this->Table->defaultSort() ?>
		</th>
        <th class="main-column">
            <?php echo $this->Table->sort(__d('admin', 'title'), 'Products.title') ?>
        </th>

		<?php if (TRANSLATION_ACTIVE): ?>
			<th></th>
		<?php endif; ?>


        <th>
            <?php echo $this->Table->sort(__d('admin', 'published'), 'Products.published') ?>
        </th>
        <th>

        </th>
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
                <?php echo $this->Table->toggler('published') ?>
            </td>
            <td>
                <div class="table__actions">
                    <?= $this->Table->editAction() ?>
                    <?= $this->Table->deleteAction() ?>
                </div>

            </td>
        </tr>

        <?= $this->Table->empty() ?>

    <?php echo $this->Table->dragEnd() ?>

<?= $this->Table->end() ?>
