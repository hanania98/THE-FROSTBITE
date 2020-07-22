<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $productSupply
 */
?>
<div class="productSupply index content">
    <?= $this->Html->link(__('New Product Supply'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Supply') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('product_supply_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('supply_id') ?></th>
                    <th><?= $this->Paginator->sort('product_supply_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productSupply as $productSupply): ?>
                <tr>
                    <td><?= $this->Number->format($productSupply->product_supply_id) ?></td>
                    <td><?= $this->Number->format($productSupply->product_id) ?></td>
                    <td><?= $this->Number->format($productSupply->supply_id) ?></td>
                    <td><?= h($productSupply->product_supply_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productSupply->product_supply_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productSupply->product_supply_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productSupply->product_supply_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productSupply->product_supply_id)]) ?>
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
