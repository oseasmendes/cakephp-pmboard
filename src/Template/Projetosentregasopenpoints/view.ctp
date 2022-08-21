<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasopenpoint $projetosentregasopenpoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregasopenpoint'), ['action' => 'edit', $projetosentregasopenpoint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregasopenpoint'), ['action' => 'delete', $projetosentregasopenpoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasopenpoint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasopenpoints'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasopenpoint'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosentregasopenpoints view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasopenpoint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasopenpoint->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= $projetosentregasopenpoint->has('motivo') ? $this->Html->link($projetosentregasopenpoint->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $projetosentregasopenpoint->motivo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planodeacaodescricao') ?></th>
            <td><?= h($projetosentregasopenpoint->planodeacaodescricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasopenpoint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosentregasreqsref Id') ?></th>
            <td><?= $this->Number->format($projetosentregasopenpoint->projetosentregasreqsref_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetosentregasopenpoint->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasopenpoint->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasopenpoint->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planoacao') ?></th>
            <td><?= $projetosentregasopenpoint->planoacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasopenpoint->detalhes)); ?>
    </div>
</div>
