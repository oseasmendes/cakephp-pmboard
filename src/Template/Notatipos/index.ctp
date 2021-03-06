<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notatipo[]|\Cake\Collection\CollectionInterface $notatipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosnotas'), ['controller' => 'Projetosprodutosnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['controller' => 'Projetosprodutosnotas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="notatipos index large-9 medium-8 columns content">
    <h3><?= __('Notatipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notatipos as $notatipo): ?>
            <tr>
                <td><?= $this->Number->format($notatipo->id) ?></td>
                <td><?= h($notatipo->descricao) ?></td>
                <td><?= h($notatipo->created) ?></td>
                <td><?= h($notatipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $notatipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notatipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notatipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notatipo->id)]) ?>
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
