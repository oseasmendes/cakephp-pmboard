<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregassprint $projetosprodutosentregassprint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregassprints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutossprints'), ['controller' => 'Projetosprodutossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutossprint'), ['controller' => 'Projetosprodutossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregassprints form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosentregassprint) ?>
    <fieldset>
        <legend><?= __('Add Projetosprodutosentregassprint') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutossprint_id', ['options' => $projetosprodutossprints, 'empty' => true]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
