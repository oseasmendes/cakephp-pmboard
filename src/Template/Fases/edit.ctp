<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fase $fase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fase->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fase->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fases form large-9 medium-8 columns content">
    <?= $this->Form->create($fase) ?>
    <fieldset>
        <legend><?= __('Edit Fase') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
