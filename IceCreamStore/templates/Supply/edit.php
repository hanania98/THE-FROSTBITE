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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supply->supply_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supply->supply_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Supply'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supply form content">
            <?= $this->Form->create($supply) ?>
            <fieldset>
                <legend><?= __('Edit Supply') ?></legend>
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
