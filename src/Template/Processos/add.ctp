<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Processo $processo
 */
?>

<div class="processos form large-9 medium-8 columns content">
    <?= $this->Form->create($processo) ?>
    <fieldset>
        <legend><?= __('Add Processo') ?></legend>
        <?php
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('description',['class'=> "form-control"]);
            echo $this->Form->control('movimento',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
