<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosurl $projetosurl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosurls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosurls form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosurl) ?>
			<?php $paramid = $_POST['Url']; ?>
            <?php $this->projeto_id = $paramid; ?>   
    <fieldset>
        <legend><?= __('Add Projetosurl') ?></legend>
        <?php
            //echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
			echo $this->Form->control('projeto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            
			echo $this->Form->control('descricao');
            echo $this->Form->control('url');
            echo $this->Form->control('path');
            echo $this->Form->control('detalhe');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
