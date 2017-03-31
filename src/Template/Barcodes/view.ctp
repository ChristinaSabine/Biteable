<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Barcode'), ['action' => 'edit', $barcode->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Barcode'), ['action' => 'delete', $barcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barcode->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Barcodes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barcode'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="barcodes view large-9 medium-8 columns content">
    <h3><?= h($barcode->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($barcode->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= h($barcode->item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ingredient') ?></th>
            <td><?= h($barcode->ingredient) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diet') ?></th>
            <td><?= h($barcode->diet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($barcode->id) ?></td>
        </tr>
    </table>
</div>
