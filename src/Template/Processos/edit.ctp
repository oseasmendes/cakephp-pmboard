<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Processo $processo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $processo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $processo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="processos form large-9 medium-8 columns content">
    <?= $this->Form->create($processo) ?>
    <fieldset>
        <legend><?= __('Edit Processo') ?></legend>
        <?php
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('description',['class'=> "form-control"]);
            echo $this->Form->control('processostipo_id', ['options' => $processostipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('movimento',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
