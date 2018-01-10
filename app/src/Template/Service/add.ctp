<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Service'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Service Detail'), ['controller' => 'ServiceDetail', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service Detail'), ['controller' => 'ServiceDetail', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="service form large-9 medium-8 columns content">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Add Service') ?></legend>
        <?php
            echo $this->Form->control('name', [
            'label' => [
                'text' => 'Service Name']
            ]);
            echo $this->Form->control('description', [
            'label' => [
                'text' => 'Description']
            ]);
            echo $this->Form->control('price', [
            'label' => [
                'text' => 'Price']
            ]);
            echo $this->Form->control('status', ['type' => 'hidden', 'value' => 0]);
            echo $this->Form->control('note', [
            'label' => [
                'text' => 'Note']
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
