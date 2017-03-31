<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Barcodes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="barcodes form large-9 medium-8 columns content">
    <?= $this->Form->create($barcode) ?>
    <fieldset>
        <legend><?= __('Add Barcode') ?></legend>
        <?php
            echo $this->Form->input('number');
            echo $this->Form->input('item');
            echo $this->Form->input('ingredient');
            echo $this->Form->input('diet');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
