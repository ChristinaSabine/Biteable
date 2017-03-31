<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Barcode'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barcodes index large-9 medium-8 columns content">
    <h3><?= __('Barcodes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ingredient') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diet') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barcodes as $barcode): ?>
            <tr>
                <td><?= $this->Number->format($barcode->id) ?></td>
                <td><?= h($barcode->number) ?></td>
                <td><?= h($barcode->item) ?></td>
                <td><?= h($barcode->ingredient) ?></td>
                <td><?= h($barcode->diet) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $barcode->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $barcode->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $barcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barcode->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
