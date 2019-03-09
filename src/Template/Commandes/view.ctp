<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande $commande
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Commande'), ['action' => 'edit', $commande->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commande'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Commandes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commande'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pieces'), ['controller' => 'Pieces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Piece'), ['controller' => 'Pieces', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commandes view large-9 medium-8 columns content">
    <h3><?= h($commande->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $commande->has('client') ? $this->Html->link($commande->client->id, ['controller' => 'Clients', 'action' => 'view', $commande->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Piece') ?></th>
            <td><?= $commande->has('piece') ? $this->Html->link($commande->piece->id, ['controller' => 'Pieces', 'action' => 'view', $commande->piece->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($commande->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($commande->date) ?></td>
        </tr>
    </table>
</div>
