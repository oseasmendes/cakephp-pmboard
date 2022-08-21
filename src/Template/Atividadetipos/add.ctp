<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividadetipo $atividadetipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Atividadetipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atividadetipos form large-9 medium-8 columns content">
    <?= $this->Form->create($atividadetipo) ?>
    <fieldset>
        <legend><?= __('Add Atividadetipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
