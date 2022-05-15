<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda $agenda
 */
?>
<div class="sistemas index large-9 medium-8 columns content"> 


    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <?= $this->Html->link(__('Edit Agenda'), ['action' => 'edit', $agenda->id],['class'=>'dropdown-item'])?> 
                            <?= $this->Form->postLink(__('Delete Agenda'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Agendas'), ['action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Agenda'), ['action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add'],['class'=>'dropdown-item'])?>  
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>                              
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 

     <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($agenda, ['url'=>['controller' => 'Atas', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('novaata',['default'=> $this->Number->format($agenda->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Ata',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>     
                    <div class="col-3">        
                        <?= $this->Form->create($agenda, ['url'=>['controller' => 'Agendasnotes', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Notes',['default'=> $this->Number->format($agenda->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Nova Nota',['class'=>'btn btn-secondary btn-sm btn-block']) ?>        
                        <?= $this->Form->end() ?>
                    </div>            
                    
            </div>


<div class="row">
     <h1><p class="text-info"><?= "Agenda: ".h($agenda->id)." - ".h($agenda->etiquetaadicional) ?></p></h1>
    
    <table class="table table-info table-responsive-sm">  
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $agenda->has('departamento') ? $this->Html->link($agenda->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $agenda->departamento->id]) : '' ?></td>
             <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $agenda->has('projeto') ? $this->Html->link($agenda->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $agenda->projeto->id]) : '' ?></td>
        </tr>      
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($agenda->local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etiquetaadicional') ?></th>
            <td><?= h($agenda->etiquetaadicional) ?></td>                        
        </tr>
        <tr>       
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($agenda->referencia) ?></td>
        </tr>      
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $agenda->has('projetosproduto') ? $this->Html->link($agenda->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $agenda->projetosproduto->id]) : '' ?></td>
        </tr>         
        <tr>
            <th scope="row"><?= __('Atividadetipo Id') ?></th>
            <td><?= $this->Number->format($agenda->atividadetipo_id) ?></td>
             <th scope="row"><?= __('Localdiferente') ?></th>
            <td><?= $this->Number->format($agenda->localdiferente) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Dataagenda') ?></th>
            <td><?= h($agenda->dataagenda) ?></td>
            <th scope="row"><?= __('Horainicio') ?></th>
            <td><?= h($agenda->horainicio) ?></td>
            <th scope="row"><?= __('Horafim') ?></th>
            <td><?= h($agenda->horafim) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($agenda->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($agenda->modified) ?></td>
        </tr>
        
    </table>
    <div class="related">
        <h4><?= __('Atas') ?></h4>
        <?php if (!empty($agenda->atas)): ?>
        <table class="table">
            <tr class="bg-secondary">
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Agenda Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agenda->atas as $atas): ?>
            <tr>
                <td><?= h($atas->id) ?></td>
                <td><?= h($atas->agenda_id) ?></td>
                <td><?= h($atas->resumogeral) ?></td>
                <td><?= h($atas->created) ?></td>
                <td><?= h($atas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Atas', 'action' => 'view', $atas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Atas', 'action' => 'edit', $atas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atas', 'action' => 'delete', $atas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Notas') ?></h4>
        <?php if (!empty($agenda->agendasnotes)): ?>
        <table class="table">
            <tr class="bg-secondary">
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Agenda Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Keywords') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agenda->agendasnotes as $agendasnote): ?>
            <tr>
                <td><?= h($agendasnote->id) ?></td>
                <td><?= h($agendasnote->agenda_id) ?></td>
                <td><?= h($agendasnote->description) ?></td>
                <td><?= h($agendasnote->keywords) ?></td>
                <td><?= h($agendasnote->created) ?></td>
                <td><?= h($agendasnote->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendasnotes', 'action' => 'view', $agendasnote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendasnotes', 'action' => 'edit', $agendasnote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendasnotes', 'action' => 'delete', $agendasnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendasnote->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
