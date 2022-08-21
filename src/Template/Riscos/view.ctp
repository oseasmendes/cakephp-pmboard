<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Risco $risco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Risco'), ['action' => 'edit', $risco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Risco'), ['action' => 'delete', $risco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $risco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Riscos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Risco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Riscoscategorias'), ['controller' => 'Riscoscategorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Riscoscategoria'), ['controller' => 'Riscoscategorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="riscos view large-9 medium-8 columns content">
    <h3><?= h($risco->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Riscoscategoria') ?></th>
            <td><?= $risco->has('riscoscategoria') ? $this->Html->link($risco->riscoscategoria->descricao, ['controller' => 'Riscoscategorias', 'action' => 'view', $risco->riscoscategoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($risco->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora') ?></th>
            <td><?= h($risco->hora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($risco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($risco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($risco->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemasriscos') ?></h4>
        <?php if (!empty($risco->sistemasriscos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Risco Id') ?></th>
                <th scope="col"><?= __('Aplicabilidade Id') ?></th>
                <th scope="col"><?= __('Nivel') ?></th>
                <th scope="col"><?= __('Detalhes') ?></th>
                <th scope="col"><?= __('Probabilidade') ?></th>
                <th scope="col"><?= __('Tempoprevistoimpacto') ?></th>
                <th scope="col"><?= __('Pessoasafetadas') ?></th>
                <th scope="col"><?= __('Estimativafinanceiradorisco') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($risco->sistemasriscos as $sistemasriscos): ?>
            <tr>
                <td><?= h($sistemasriscos->id) ?></td>
                <td><?= h($sistemasriscos->sistema_id) ?></td>
                <td><?= h($sistemasriscos->risco_id) ?></td>
                <td><?= h($sistemasriscos->aplicabilidade_id) ?></td>
                <td><?= h($sistemasriscos->nivel) ?></td>
                <td><?= h($sistemasriscos->detalhes) ?></td>
                <td><?= h($sistemasriscos->probabilidade) ?></td>
                <td><?= h($sistemasriscos->tempoprevistoimpacto) ?></td>
                <td><?= h($sistemasriscos->pessoasafetadas) ?></td>
                <td><?= h($sistemasriscos->estimativafinanceiradorisco) ?></td>
                <td><?= h($sistemasriscos->created) ?></td>
                <td><?= h($sistemasriscos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasriscos', 'action' => 'view', $sistemasriscos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasriscos', 'action' => 'edit', $sistemasriscos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasriscos', 'action' => 'delete', $sistemasriscos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasriscos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
