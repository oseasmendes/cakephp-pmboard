<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logbook $logbook
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">TO DO List</h3>
                        </div>
                            <div class="card-body">
                                
            <div class="row" >
                    <div class="col-2"> 
                        <?= $this->Form->create($logbook, ['url'=>['controller' => 'Logbooksitems', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('item',['default'=> $this->Number->format($logbook->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Item',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
            </div>
                            <div class="row" >
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Logbook'), ['action' => 'edit', $logbook->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Logbook'), ['action' => 'delete', $logbook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logbook->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logbooks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logbook'), ['action' => 'add']) ?> </li>

    </ul>
</nav>
</div>
<div class="row" >
<div class="logbooks view large-9 medium-8 columns content">
    <h3><?= h($logbook->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($logbook->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Programa') ?></th>
            <td><?= $logbook->has('programa') ? $this->Html->link($logbook->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $logbook->programa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atividadetipo') ?></th>
            <td><?= $logbook->has('atividadetipo') ? $this->Html->link($logbook->atividadetipo->descricao, ['controller' => 'Atividadetipos', 'action' => 'view', $logbook->atividadetipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($logbook->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($logbook->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($logbook->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($logbook->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Logbooksitems') ?></h4>
        <?php if (!empty($logbook->logbooksitems)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Logbook Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Hora') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Notificaracao') ?></th>
                <th scope="col"><?= __('Notificarcontato') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($logbook->logbooksitems as $logbooksitems): ?>
            <tr>
                <td><?= h($logbooksitems->id) ?></td>
                <td><?= h($logbooksitems->projeto_id) ?></td>
                <td><?= h($logbooksitems->consultore_id) ?></td>
                <td><?= h($logbooksitems->logbook_id) ?></td>
                <td><?= h($logbooksitems->data) ?></td>
                <td><?= h($logbooksitems->hora) ?></td>
                <td><?= h($logbooksitems->descricao) ?></td>
                <td><?= h($logbooksitems->historico) ?></td>
                <td><?= h($logbooksitems->notificaracao) ?></td>
                <td><?= h($logbooksitems->notificarcontato) ?></td>
                <td><?= h($logbooksitems->responsavel) ?></td>
                <td><?= h($logbooksitems->created) ?></td>
                <td><?= h($logbooksitems->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Logbooksitems', 'action' => 'view', $logbooksitems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Logbooksitems', 'action' => 'edit', $logbooksitems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Logbooksitems', 'action' => 'delete', $logbooksitems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logbooksitems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>



</div>

                                    </div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>