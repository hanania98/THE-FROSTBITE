<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $supply
 */
?>
<div class="supply index content">
    <?= $this->Html->link(__('New Supply'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Supply') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('supply_id') ?></th>
                    <th><?= $this->Paginator->sort('name_supply') ?></th>
                    <th><?= $this->Paginator->sort('quantity_supply') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('supply_expenditure') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($supply as $supply): ?>
                <tr>
                    <td><?= $this->Number->format($supply->supply_id) ?></td>
                    <td><?= h($supply->name_supply) ?></td>
                    <td><?= $this->Number->format($supply->quantity_supply) ?></td>
                    <td><?= h($supply->date) ?></td>
                    <td><?= h($supply->supply_expenditure) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supply->supply_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supply->supply_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supply->supply_id], ['confirm' => __('Are you sure you want to delete # {0}?', $supply->supply_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
