<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasconsultore $sistemasconsultore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
      <?php $paramid = $_POST['Consultant'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasconsultore') ?></legend>
        <?php
             echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id  
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('knowhow_id', ['options' => $knowhows, 'empty' => true]);
            echo $this->Form->control('principalfuncao');
            echo $this->Form->control('atividadeexecutada');
            echo $this->Form->control('dataatividade', ['empty' => true]);
            echo $this->Form->control('consultoria');
            echo $this->Form->control('alocacao');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
