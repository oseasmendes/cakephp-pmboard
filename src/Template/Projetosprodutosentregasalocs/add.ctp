<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasaloc $projetosprodutosentregasaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasalocs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregasalocs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosentregasaloc) ?>
            <?php $paramid = $_POST['Aloc']; ?>
            <?php $this->projetosprodutoentrega_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Projetosprodutosentregasaloc') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid));

            echo $this->Form->control('descricao');
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
           // echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
