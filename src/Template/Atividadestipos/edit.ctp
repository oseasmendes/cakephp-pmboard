<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividadestipo $atividadestipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atividadestipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atividadestipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Atividadestipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Folhaatividadesdetalhes'), ['controller' => 'Folhaatividadesdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Folhaatividadesdetalhe'), ['controller' => 'Folhaatividadesdetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atividadestipos form large-9 medium-8 columns content">
    <?= $this->Form->create($atividadestipo) ?>
    <fieldset>
        <legend><?= __('Edit Atividadestipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
