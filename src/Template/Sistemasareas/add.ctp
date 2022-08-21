<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasarea $sistemasarea
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasareas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasareas form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasarea) ?>
            <?php $paramid = $_POST['Area'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasarea') ?></legend>
        <?php
            
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id   

            echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
            echo $this->Form->control('contato');
            echo $this->Form->control('quantidadeusuarios');
            echo $this->Form->control('quantidadelicencas');
            echo $this->Form->control('tipolicenca');
            echo $this->Form->control('descricao');
            echo $this->Form->control('papeldocontato');
            echo $this->Form->control('contatoramal');
            echo $this->Form->control('contatoemail');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
