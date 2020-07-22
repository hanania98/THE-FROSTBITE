<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $staff
 */
?>
<div class="staff index content">
    <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Staff') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('staff_id') ?></th>
                    <th><?= $this->Paginator->sort('backup_id') ?></th>
                    <th><?= $this->Paginator->sort('staff_name') ?></th>
                    <th><?= $this->Paginator->sort('staff_username') ?></th>
                    <th><?= $this->Paginator->sort('staff_password') ?></th>
                    <th><?= $this->Paginator->sort('staff_email') ?></th>
                    <th><?= $this->Paginator->sort('staff_phone_no') ?></th>
                    <th><?= $this->Paginator->sort('staff_address') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($staff as $staff): ?>
                <tr>
                    <td><?= $this->Number->format($staff->staff_id) ?></td>
                    <td><?= $this->Number->format($staff->backup_id) ?></td>
                    <td><?= h($staff->staff_name) ?></td>
                    <td><?= h($staff->staff_username) ?></td>
                    <td><?= h($staff->staff_password) ?></td>
                    <td><?= h($staff->staff_email) ?></td>
                    <td><?= $this->Number->format($staff->staff_phone_no) ?></td>
                    <td><?= h($staff->staff_address) ?></td>
                    <td><?= h($staff->role) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $staff->staff_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staff->staff_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staff->staff_id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->staff_id)]) ?>
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
