<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<div>
    <?= $this->Form->create($client,['url'=>[
        'controller'=>'Users',
        'action'=>'add'
    ]]) ?>
    <fieldset>
        <legend><?= __('Add Client') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('fisrt_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('address');
            echo $this->Form->control('tel');
            echo $this->Form->control('photo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
