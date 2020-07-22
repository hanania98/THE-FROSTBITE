<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customer->customer_Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customer->customer_Id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Customer'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customer form content">
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <legend><?= __('Edit Customer') ?></legend>
                <?php
                    echo $this->Form->control('Full_Name');
                    echo $this->Form->control('Username');
                    echo $this->Form->control('Password');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Phone_No');
                    echo $this->Form->control('Address');
                    echo $this->Form->control('Birthday');
                    echo $this->Form->control('Membership');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
