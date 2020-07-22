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
            <?= $this->Html->link(__('Edit Supply'), ['action' => 'edit', $supply->supply_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supply'), ['action' => 'delete', $supply->supply_id], ['confirm' => __('Are you sure you want to delete # {0}?', $supply->supply_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Supply'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supply'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supply view content">
            <h3><?= h($supply->supply_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name Supply') ?></th>
                    <td><?= h($supply->name_supply) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supply Expenditure') ?></th>
                    <td><?= h($supply->supply_expenditure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supply Id') ?></th>
                    <td><?= $this->Number->format($supply->supply_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity Supply') ?></th>
                    <td><?= $this->Number->format($supply->quantity_supply) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($supply->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
