<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasmodulo $sistemasmodulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasmodulos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasmodulo) ?>
            <?php $paramid = $_POST['Modulos']; ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasmodulo') ?></legend>
        <?php
            //echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber 
            echo $this->Form->control('nome');
            echo $this->Form->control('versao');
            echo $this->Form->control('prio');
            echo $this->Form->control('codenome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
