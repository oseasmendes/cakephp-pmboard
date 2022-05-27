<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueue $fupqueue
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fupqueue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fupqueue->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupqueuesdistributions'), ['controller' => 'Fupqueuesdistributions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupqueuesdistribution'), ['controller' => 'Fupqueuesdistributions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupqueues form large-9 medium-8 columns content">
    <?= $this->Form->create($fupqueue) ?>
    <fieldset>
        <legend><?= __('Edit Fupqueue') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('ativo');
            echo $this->Form->control('observacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
