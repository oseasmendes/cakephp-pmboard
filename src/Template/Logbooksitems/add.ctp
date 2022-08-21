<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logbooksitem $logbooksitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Logbooksitems'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Logbooks'), ['controller' => 'Logbooks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Logbook'), ['controller' => 'Logbooks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logbooksitems form large-9 medium-8 columns content">
    <?= $this->Form->create($logbooksitem) ?>
    <fieldset>
        <legend><?= __('Add Logbooksitem') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('logbook_id', ['options' => $logbooks, 'empty' => true]);
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('hora',array('type' => 'time'));
            echo $this->Form->control('referencia');
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
            echo $this->Form->control('notificacao');
            echo $this->Form->control('notificarcontato');
            echo $this->Form->control('responsavel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-info btn-sm btn-block']) ?>
    <?= $this->Form->end() ?>
</div>
