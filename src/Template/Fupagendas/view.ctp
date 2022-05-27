<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupagenda $fupagenda
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<div class="fupagendas view large-9 medium-8 columns content">
    <h3><?= h($fupagenda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fupqueue') ?></th>
            <td><?= $fupagenda->has('fupqueue') ? $this->Html->link($fupagenda->fupqueue->id, ['controller' => 'Fupqueues', 'action' => 'view', $fupagenda->fupqueue->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($fupagenda->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $fupagenda->has('statusfuncional') ? $this->Html->link($fupagenda->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $fupagenda->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fupagenda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Checkpointdata') ?></th>
            <td><?= h($fupagenda->checkpointdata) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupagenda->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupagenda->modified) ?></td>
        </tr>
    </table>   
    <div class="related">
        <h4><?= __('Em Andamento') ?></h4>
        <?php if (!empty($fupagenda->fupinprogres)): ?>
        <table class="table table-bordered table-responsive-sm">  
            <tr>               
                <th scope="col"><?= __('Departamento') ?></th>                
                <th scope="col"><?= __('ID','Esupportid') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Prio') ?></th>
                <th scope="col"><?= __('Requisitante') ?></th>
                <th scope="col"><?= __('Status Detalhado','Statusdetalhado') ?></th>
                <th scope="col"><?= __('Analista') ?></th>
                <th scope="col"><?= __('Comentario') ?></th>
                <th scope="col"><?= __('Lastupdate') ?></th>              
              
            </tr>
            <?php foreach ($fupagenda->fupinprogres as $fupinprogres): ?>
            <tr>                
                <td><?= h($fupinprogres->departamento) ?></td>                
                <td><?= h($fupinprogres->esupportid) ?></td>
                <td><?= h($fupinprogres->titulo) ?></td>
                <td><?= h($fupinprogres->prio) ?></td>
                <td><?= h($fupinprogres->requisitante) ?></td>
                <td><?= h($fupinprogres->statusdetalhado) ?></td>
                <td><?= h($fupinprogres->analista) ?></td>
                <td><?= h($fupinprogres->comentario) ?></td>
                <td><?= h($fupinprogres->lastupdate) ?></td>              
               
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>   
    <div class="related">
        <h4><?= __('Não Iniciado') ?></h4>
        <?php if (!empty($fupagenda->fupnotstarted)): ?>
            <table class="table table-bordered table-responsive-sm">  
            <tr>                
                <th scope="col"><?= __('Departamento') ?></th>                
                <th scope="col"><?= __('ID','Esupportid') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Prio') ?></th>
                <th scope="col"><?= __('Requisitante') ?></th>
                <th scope="col"><?= __('Status Detalhado','Statusdetalhado') ?></th>                       
               
            </tr>
            <?php foreach ($fupagenda->fupnotstarted as $fupnotstarted): ?>
            <tr>                
                <td><?= h($fupnotstarted->departamento) ?></td>                
                <td><?= h($fupnotstarted->esupportid) ?></td>
                <td><?= h($fupnotstarted->titulo) ?></td>
                <td><?= h($fupnotstarted->prio) ?></td>
                <td><?= h($fupnotstarted->requisitante) ?></td>
                <td><?= h($fupnotstarted->statusdetalhado) ?></td>
                  
             
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Concluído') ?></h4>
        <?php if (!empty($fupagenda->fupdeployed)): ?>
            <table class="table table-bordered table-responsive-sm">  
            <tr>               
                <th scope="col"><?= __('Departamento') ?></th>             
                <th scope="col"><?= __('ID','Esupportid') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Prio') ?></th>
                <th scope="col"><?= __('Requisitante') ?></th>
                <th scope="col"><?= __('Status Detalhado','Statusdetalhado') ?></th>
                <th scope="col"><?= __('Analista') ?></th>
            
                <th scope="col"><?= __('Lastupdate') ?></th>               
               
            </tr>
            <?php foreach ($fupagenda->fupdeployed as $fupdeployed): ?>
            <tr>               
                <td><?= h($fupdeployed->departamento) ?></td>                
                <td><?= h($fupdeployed->esupportid) ?></td>
                <td><?= h($fupdeployed->titulo) ?></td>
                <td><?= h($fupdeployed->prio) ?></td>
                <td><?= h($fupdeployed->requisitante) ?></td>
                <td><?= h($fupdeployed->statusdetalhado) ?></td>
                <td><?= h($fupdeployed->analista) ?></td>
             
                <td><?= h($fupdeployed->lastupdate) ?></td>          
            
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
