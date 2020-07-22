<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $orderDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order Detail'), ['action' => 'edit', $orderDetail->order_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order Detail'), ['action' => 'delete', $orderDetail->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetail->order_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Order Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderDetails view content">
            <h3><?= h($orderDetail->order_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('List Order Details') ?></th>
                    <td><?= h($orderDetail->list_order_details) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Id') ?></th>
                    <td><?= $this->Number->format($orderDetail->order_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Id') ?></th>
                    <td><?= $this->Number->format($orderDetail->customer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Id') ?></th>
                    <td><?= $this->Number->format($orderDetail->staff_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($orderDetail->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($orderDetail->amount) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
