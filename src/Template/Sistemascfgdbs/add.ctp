<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgdb $sistemascfgdb
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbdets'), ['controller' => 'Sistemascfgdbdets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdbdet'), ['controller' => 'Sistemascfgdbdets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgdbs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgdb) ?>
      <?php $paramid = $_POST['Base'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemascfgdb') ?></legend>
        <?php
            
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id  
            echo $this->Form->control('banco_id', ['options' => $bancos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('contato');
            echo $this->Form->control('ipaddress');
            echo $this->Form->control('conn');
            echo $this->Form->control('versao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
