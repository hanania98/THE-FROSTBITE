<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $orderDetails
 */
?>
<div class="orderDetails index content">
    <?= $this->Html->link(__('New Order Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Order Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('staff_id') ?></th>
                    <th><?= $this->Paginator->sort('list_order_details') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderDetails as $orderDetail): ?>
                <tr>
                    <td><?= $this->Number->format($orderDetail->order_id) ?></td>
                    <td><?= $this->Number->format($orderDetail->customer_id) ?></td>
                    <td><?= $this->Number->format($orderDetail->staff_id) ?></td>
                    <td><?= h($orderDetail->list_order_details) ?></td>
                    <td><?= $this->Number->format($orderDetail->total) ?></td>
                    <td><?= $this->Number->format($orderDetail->amount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orderDetail->order_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderDetail->order_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderDetail->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetail->order_id)]) ?>
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
