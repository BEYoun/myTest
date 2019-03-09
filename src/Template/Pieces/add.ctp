<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piece $piece
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pieces'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pieces form large-9 medium-8 columns content">
    <?= $this->Form->create($piece) ?>
    <fieldset>
        <legend><?= __('Add Piece') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('color');
            echo $this->Form->control('size');
            echo $this->Form->control('price');
            echo $this->Form->control('categories_id', ['options' => $categories]);
            echo $this->Form->control('picture');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
