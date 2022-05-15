<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgintegration $sistemascfgintegration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemascfgintegration'), ['action' => 'edit', $sistemascfgintegration->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemascfgintegration'), ['action' => 'delete', $sistemascfgintegration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgintegration->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Integrations'), ['controller' => 'Integrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Integration'), ['controller' => 'Integrations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemascfgintegrations view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgintegration->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tecnologia') ?></th>
            <td><?= $sistemascfgintegration->has('tecnologia') ? $this->Html->link($sistemascfgintegration->tecnologia->descricao, ['controller' => 'Tecnologias', 'action' => 'view', $sistemascfgintegration->tecnologia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($sistemascfgintegration->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgintegration->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($sistemascfgintegration->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgintegration->has('sistema') ? $this->Html->link($sistemascfgintegration->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgintegration->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Integration') ?></th>
            <td><?= $sistemascfgintegration->has('integration') ? $this->Html->link($sistemascfgintegration->integration->descricao, ['controller' => 'Integrations', 'action' => 'view', $sistemascfgintegration->integration->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgintegration->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgintegration->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgintegration->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemascfgintegration->observacao)); ?>
    </div>
</div>
