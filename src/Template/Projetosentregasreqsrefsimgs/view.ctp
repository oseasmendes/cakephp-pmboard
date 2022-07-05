<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsimg $projetosentregasreqsrefsimg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregasreqsrefsimg'), ['action' => 'edit', $projetosentregasreqsrefsimg->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregasreqsrefsimg'), ['action' => 'delete', $projetosentregasreqsrefsimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefsimg->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsimgs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsimg'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsimgs view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasreqsrefsimg->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasreqsrefsimg->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pathimage') ?></th>
            <td><?= h($projetosentregasreqsrefsimg->pathimage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagestipo') ?></th>
            <td><?= $projetosentregasreqsrefsimg->has('imagestipo') ? $this->Html->link($projetosentregasreqsrefsimg->imagestipo->descricao, ['controller' => 'Imagestipos', 'action' => 'view', $projetosentregasreqsrefsimg->imagestipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($projetosentregasreqsrefsimg->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagemid') ?></th>
            <td><?= h($projetosentregasreqsrefsimg->imagemid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($projetosentregasreqsrefsimg->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasreqsrefsimg->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosentregasreqsref Id') ?></th>
            <td><?= $this->Number->format($projetosentregasreqsrefsimg->projetosentregasreqsref_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasreqsrefsimg->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasreqsrefsimg->modified) ?></td>
        </tr>
    </table>
</div>
