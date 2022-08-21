<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreq $projetosentregasreq
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Editar Requisito</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<div class="projetosentregasreqs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreq) ?>
    <fieldset>
        <legend><?= __('Edit Requirements') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'disabled' => 'disabled','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('entregastipo_id', ['options' => $entregastipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataemissao', ['empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('solicitante',['class'=> "form-control"]);
            echo $this->Form->control('wave',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('prioridade',['class'=> "form-control"]);
            echo $this->Form->control('origem',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);            
            echo $this->Form->control('objetivo',['class'=> "form-control"]);
            echo $this->Form->control('regradenegocio',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);                        
            echo $this->Form->control('sample',['class'=> "form-control"]);  
            echo $this->Form->control('previsaoanalise',['class'=> "form-control"]);
            echo $this->Form->control('previsaosprints',['class'=> "form-control"]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);            
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('developer_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('unidademedida_id', ['options' => $unidademedidas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('frente_id', ['options' => $frentes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('reqstatus',['class'=> "form-control"]);            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
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