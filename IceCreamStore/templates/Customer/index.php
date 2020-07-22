<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $customer
 */
?>
<div class="customer index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customer') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('customer_Id') ?></th>
                    <th><?= $this->Paginator->sort('Full_Name') ?></th>
                    <th><?= $this->Paginator->sort('Username') ?></th>
                    <th><?= $this->Paginator->sort('Password') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Phone_No') ?></th>
                    <th><?= $this->Paginator->sort('Address') ?></th>
                    <th><?= $this->Paginator->sort('Birthday') ?></th>
                    <th><?= $this->Paginator->sort('Membership') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customer as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->customer_Id) ?></td>
                    <td><?= h($customer->Full_Name) ?></td>
                    <td><?= h($customer->Username) ?></td>
                    <td><?= h($customer->Password) ?></td>
                    <td><?= h($customer->Email) ?></td>
                    <td><?= $this->Number->format($customer->Phone_No) ?></td>
                    <td><?= h($customer->Address) ?></td>
                    <td><?= h($customer->Birthday) ?></td>
                    <td><?= h($customer->Membership) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->customer_Id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->customer_Id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->customer_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->customer_Id)]) ?>
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
