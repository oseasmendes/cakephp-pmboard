<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronusitem[]|\Cake\Collection\CollectionInterface $kronusitems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Kronusitem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kronusplans'), ['controller' => 'Kronusplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronusplan'), ['controller' => 'Kronusplans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flags'), ['controller' => 'Flags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flag'), ['controller' => 'Flags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kronusitems index large-9 medium-8 columns content">
    <h3><?= __('Kronusitems') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kronusplan_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kickoff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nometarefa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etapa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('percconcluido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidademedida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('termino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('predecessora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nomerecurso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idexclusivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataatualizacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel6') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel7') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel8') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel9') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel10') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apontamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('milestone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decisorio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('selecao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flagname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flag_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atividade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comentario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criticidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fasenome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kronusitems as $kronusitem): ?>
            <tr>
                <td><?= $this->Number->format($kronusitem->id) ?></td>
                <td><?= $kronusitem->has('kronusplan') ? $this->Html->link($kronusitem->kronusplan->id, ['controller' => 'Kronusplans', 'action' => 'view', $kronusitem->kronusplan->id]) : '' ?></td>
                <td><?= h($kronusitem->kickoff) ?></td>
                <td><?= $this->Number->format($kronusitem->seq) ?></td>
                <td><?= $this->Number->format($kronusitem->ordem) ?></td>
                <td><?= h($kronusitem->edt) ?></td>
                <td><?= $kronusitem->has('consultore') ? $this->Html->link($kronusitem->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $kronusitem->consultore->id]) : '' ?></td>
                <td><?= h($kronusitem->categoria) ?></td>
                <td><?= h($kronusitem->nometarefa) ?></td>
                <td><?= h($kronusitem->etapa) ?></td>
                <td><?= $this->Number->format($kronusitem->percconcluido) ?></td>
                <td><?= $this->Number->format($kronusitem->duracao) ?></td>
                <td><?= h($kronusitem->unidademedida) ?></td>
                <td><?= h($kronusitem->inicio) ?></td>
                <td><?= h($kronusitem->termino) ?></td>
                <td><?= $this->Number->format($kronusitem->predecessora) ?></td>
                <td><?= h($kronusitem->nomerecurso) ?></td>
                <td><?= $this->Number->format($kronusitem->idexclusivo) ?></td>
                <td><?= h($kronusitem->dataatualizacao) ?></td>
                <td><?= $this->Number->format($kronusitem->versao) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel1) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel2) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel3) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel4) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel5) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel6) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel7) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel8) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel9) ?></td>
                <td><?= $this->Number->format($kronusitem->nivel10) ?></td>
                <td><?= $kronusitem->has('projetosproduto') ? $this->Html->link($kronusitem->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $kronusitem->projetosproduto->id]) : '' ?></td>
                <td><?= $kronusitem->has('projetosprodutosentrega') ? $this->Html->link($kronusitem->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $kronusitem->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= $kronusitem->has('projeto') ? $this->Html->link($kronusitem->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $kronusitem->projeto->id]) : '' ?></td>
                <td><?= $this->Number->format($kronusitem->apontamento) ?></td>
                <td><?= $kronusitem->has('pareto') ? $this->Html->link($kronusitem->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $kronusitem->pareto->id]) : '' ?></td>
                <td><?= h($kronusitem->milestone) ?></td>
                <td><?= $this->Number->format($kronusitem->decisorio) ?></td>
                <td><?= $this->Number->format($kronusitem->selecao) ?></td>
                <td><?= h($kronusitem->resumo) ?></td>
                <td><?= h($kronusitem->referencia) ?></td>
                <td><?= h($kronusitem->flagname) ?></td>
                <td><?= $kronusitem->has('flag') ? $this->Html->link($kronusitem->flag->id, ['controller' => 'Flags', 'action' => 'view', $kronusitem->flag->id]) : '' ?></td>
                <td><?= $kronusitem->has('fase') ? $this->Html->link($kronusitem->fase->descricao, ['controller' => 'Fases', 'action' => 'view', $kronusitem->fase->id]) : '' ?></td>
                <td><?= h($kronusitem->responsavel) ?></td>
                <td><?= h($kronusitem->atividade) ?></td>
                <td><?= h($kronusitem->comentario) ?></td>
                <td><?= h($kronusitem->criticidade) ?></td>
                <td><?= h($kronusitem->created) ?></td>
                <td><?= h($kronusitem->modified) ?></td>
                <td><?= h($kronusitem->fasenome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kronusitem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kronusitem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kronusitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kronusitem->id)]) ?>
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
