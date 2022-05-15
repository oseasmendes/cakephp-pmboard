<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasconsultore $sistemasconsultore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasconsultore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasconsultore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasconsultores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Knowhows'), ['controller' => 'Knowhows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Knowhow'), ['controller' => 'Knowhows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasconsultores form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasconsultore) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasconsultore') ?></legend>
        <?php
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('knowhow_id', ['options' => $knowhows, 'empty' => true]);
            echo $this->Form->control('principalfuncao');
            echo $this->Form->control('atividadeexecutada');
            echo $this->Form->control('dataatividade', ['empty' => true]);
            echo $this->Form->control('consultoria');
            echo $this->Form->control('alocacao');
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
