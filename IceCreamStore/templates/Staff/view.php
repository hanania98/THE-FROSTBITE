<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $staff
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->staff_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->staff_id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->staff_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staff'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staff view content">
            <h3><?= h($staff->staff_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Staff Name') ?></th>
                    <td><?= h($staff->staff_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Username') ?></th>
                    <td><?= h($staff->staff_username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Password') ?></th>
                    <td><?= h($staff->staff_password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Email') ?></th>
                    <td><?= h($staff->staff_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Address') ?></th>
                    <td><?= h($staff->staff_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($staff->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Id') ?></th>
                    <td><?= $this->Number->format($staff->staff_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Backup Id') ?></th>
                    <td><?= $this->Number->format($staff->backup_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Phone No') ?></th>
                    <td><?= $this->Number->format($staff->staff_phone_no) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
