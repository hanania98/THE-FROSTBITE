<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $supply
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Supply'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supply form content">
            <?= $this->Form->create($supply) ?>
            <fieldset>
                <legend><?= __('Add Supply') ?></legend>
                <?php
                    echo $this->Form->control('name_supply');
                    echo $this->Form->control('quantity_supply');
                    echo $this->Form->control('date');
                    echo $this->Form->control('supply_expenditure');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
