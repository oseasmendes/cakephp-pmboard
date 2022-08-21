<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ambiente $ambiente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ambiente'), ['action' => 'edit', $ambiente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ambiente'), ['action' => 'delete', $ambiente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ambiente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ambientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ambiente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ambientes view large-9 medium-8 columns content">
    <h3><?= h($ambiente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($ambiente->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ambiente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ambiente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ambiente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosprodutosentregas') ?></h4>
        <?php if (!empty($ambiente->projetosprodutosentregas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Tmpprevisto') ?></th>
                <th scope="col"><?= __('Unidademedida Id') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col"><?= __('Datarealizada') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Justificativa') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Ordenacao') ?></th>
                <th scope="col"><?= __('Planolinha') ?></th>
                <th scope="col"><?= __('Fase Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Ambiente Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ambiente->projetosprodutosentregas as $projetosprodutosentregas): ?>
            <tr>
                <td><?= h($projetosprodutosentregas->id) ?></td>
                <td><?= h($projetosprodutosentregas->referencia) ?></td>
                <td><?= h($projetosprodutosentregas->descricao) ?></td>
                <td><?= h($projetosprodutosentregas->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosentregas->sistema_id) ?></td>
                <td><?= h($projetosprodutosentregas->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutosentregas->pareto_id) ?></td>
                <td><?= h($projetosprodutosentregas->created) ?></td>
                <td><?= h($projetosprodutosentregas->modified) ?></td>
                <td><?= h($projetosprodutosentregas->tmpprevisto) ?></td>
                <td><?= h($projetosprodutosentregas->unidademedida_id) ?></td>
                <td><?= h($projetosprodutosentregas->dataprevista) ?></td>
                <td><?= h($projetosprodutosentregas->datarealizada) ?></td>
                <td><?= h($projetosprodutosentregas->prioridade) ?></td>
                <td><?= h($projetosprodutosentregas->historico) ?></td>
                <td><?= h($projetosprodutosentregas->justificativa) ?></td>
                <td><?= h($projetosprodutosentregas->responsavel) ?></td>
                <td><?= h($projetosprodutosentregas->ordenacao) ?></td>
                <td><?= h($projetosprodutosentregas->planolinha) ?></td>
                <td><?= h($projetosprodutosentregas->fase_id) ?></td>
                <td><?= h($projetosprodutosentregas->empresa_id) ?></td>
                <td><?= h($projetosprodutosentregas->ambiente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregas', 'action' => 'edit', $projetosprodutosentregas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregas', 'action' => 'delete', $projetosprodutosentregas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
