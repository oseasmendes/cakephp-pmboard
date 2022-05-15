<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosentrega->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentrega->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unidademedidas'), ['controller' => 'Unidademedidas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidademedida'), ['controller' => 'Unidademedidas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosapontamentos'), ['controller' => 'Projetosapontamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosapontamento'), ['controller' => 'Projetosapontamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasparetos'), ['controller' => 'Projetosentregasparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregaspareto'), ['controller' => 'Projetosentregasparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List View Kanbanentregas'), ['controller' => 'ViewKanbanentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New View Kanbanentrega'), ['controller' => 'ViewKanbanentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregas form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosentrega) ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutosentrega') ?></legend>
        <?php
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('sprintoriginal',['class'=> "form-control"]);
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('fase_id', ['options' => $fases, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ambiente_id', ['options' => $ambientes, 'empty' => true,'class'=>['class'=> 'form-control']]);
             echo $this->Form->control('entregastipo_id', ['options' => $entregastipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('tmpprevisto',['class'=> "form-control"]);
            echo $this->Form->control('unidademedida_id', ['options' => $unidademedidas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataprevista', ['empty' => true]);
            echo $this->Form->control('datarealizada', ['empty' => true]);
            echo $this->Form->control('prioridade',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('predecessora',['class'=> "form-control"]);
            echo '<p>';
            echo $this->Form->control('prevdatainicio', ['empty' => true]);
            echo $this->Form->control('prevdatafim', ['empty' => true]);
            echo '<p>';
            echo $this->Form->control('canal', ['options' => ['JIRA'=>'JIRA','MANUAL'=>'MANUAL','ESUPPORT'=>'ESUPPORT','SERVICENOW'=>'SERVICENOW','EMAIL'=>'EMAIL','TEAMS'=>'TEAMS'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('escoporemocao',['class'=> "form-control"]);
            echo $this->Form->control('escoporemocaodata', ['empty' => true]);
            echo $this->Form->control('escoporemocaodescricao',['class'=> "form-control"]);
            echo $this->Form->control('archivedate',['empty' => true]);
            echo $this->Form->control('archivereason',['empty' => true]);         
            echo '<p>';
        ?>
            <div class="form-check form-check-inline">                  
                    <div class="filho">
                        <?= $this->Form->control('archivestatus',['class'=> "form-control"]); ?>
                    </div>  
            </div>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
