<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosapontamento[]|\Cake\Collection\CollectionInterface $projetosapontamentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosapontamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosapontamentos index large-9 medium-8 columns content">
    <h3><?= __('Apontamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('temporealizado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosapontamentos as $projetosapontamento): ?>
            <tr>
                <td><?= $this->Number->format($projetosapontamento->id) ?></td>
                <td><?= $projetosapontamento->has('consultore') ? $this->Html->link($projetosapontamento->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosapontamento->consultore->id]) : '' ?></td>
                <td><?= $projetosapontamento->has('projetosprodutosentrega') ? $this->Html->link($projetosapontamento->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosapontamento->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= h($projetosapontamento->data) ?></td>
                <td><?= h($projetosapontamento->horainicio) ?></td>
                <td><?= h($projetosapontamento->horafim) ?></td>
                <td><?= $this->Number->format($projetosapontamento->temporealizado) ?></td>
                <td><?= $projetosapontamento->has('statusfuncional') ? $this->Html->link($projetosapontamento->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosapontamento->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosapontamento->descricao) ?></td>
                <td><?= h($projetosapontamento->canal) ?></td>
                <td><?= h($projetosapontamento->created) ?></td>
                <td><?= h($projetosapontamento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosapontamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosapontamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosapontamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosapontamento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
