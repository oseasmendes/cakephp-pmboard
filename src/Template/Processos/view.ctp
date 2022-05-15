<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Processo $processo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Processo'), ['action' => 'edit', $processo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Processo'), ['action' => 'delete', $processo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $processo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Processos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Processo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="processos view large-9 medium-8 columns content">
    <h3><?= h($processo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($processo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($processo->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movimento') ?></th>
            <td><?= h($processo->movimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($processo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($processo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($processo->modified) ?></td>
        </tr>
    </table>
</div>
