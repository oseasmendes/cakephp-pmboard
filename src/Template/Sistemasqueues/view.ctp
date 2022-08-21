<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasqueue $sistemasqueue
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasqueue'), ['action' => 'edit', $sistemasqueue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasqueue'), ['action' => 'delete', $sistemasqueue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasqueue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasqueues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasqueue'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasqueues view large-9 medium-8 columns content">
    <h3><?= h($sistemasqueue->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasqueue->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasqueue->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasqueue->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasqueue->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasqueue->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Selectedflag') ?></th>
            <td><?= $sistemasqueue->selectedflag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemas') ?></h4>
        <?php if (!empty($sistemasqueue->sistemas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Dataregistro') ?></th>
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Objetivo') ?></th>
                <th scope="col"><?= __('Dataimplantacao') ?></th>
                <th scope="col"><?= __('Dataultimaatualizacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Bookmarked') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Empresasunidade Id') ?></th>
                <th scope="col"><?= __('Urlprincipal') ?></th>
                <th scope="col"><?= __('Urlteste') ?></th>
                <th scope="col"><?= __('Urlqualidade') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Sistemasestrategia Id') ?></th>
                <th scope="col"><?= __('Sistemasqueue Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasqueue->sistemas as $sistemas): ?>
            <tr>
                <td><?= h($sistemas->id) ?></td>
                <td><?= h($sistemas->dataregistro) ?></td>
                <td><?= h($sistemas->codenome) ?></td>
                <td><?= h($sistemas->descricao) ?></td>
                <td><?= h($sistemas->referencia) ?></td>
                <td><?= h($sistemas->empresa_id) ?></td>
                <td><?= h($sistemas->objetivo) ?></td>
                <td><?= h($sistemas->dataimplantacao) ?></td>
                <td><?= h($sistemas->dataultimaatualizacao) ?></td>
                <td><?= h($sistemas->created) ?></td>
                <td><?= h($sistemas->modified) ?></td>
                <td><?= h($sistemas->departamento_id) ?></td>
                <td><?= h($sistemas->bookmarked) ?></td>
                <td><?= h($sistemas->statusfuncional_id) ?></td>
                <td><?= h($sistemas->prioridade) ?></td>
                <td><?= h($sistemas->ativo) ?></td>
                <td><?= h($sistemas->empresasunidade_id) ?></td>
                <td><?= h($sistemas->urlprincipal) ?></td>
                <td><?= h($sistemas->urlteste) ?></td>
                <td><?= h($sistemas->urlqualidade) ?></td>
                <td><?= h($sistemas->canal) ?></td>
                <td><?= h($sistemas->sistemasestrategia_id) ?></td>
                <td><?= h($sistemas->sistemasqueue_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemas', 'action' => 'view', $sistemas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemas', 'action' => 'edit', $sistemas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemas', 'action' => 'delete', $sistemas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
