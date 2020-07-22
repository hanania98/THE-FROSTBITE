<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->product_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->product_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="product view content">
            <h3><?= h($product->product_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name Product') ?></th>
                    <td><?= h($product->name_product) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($product->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Expenditure') ?></th>
                    <td><?= h($product->product_expenditure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Id') ?></th>
                    <td><?= $this->Number->format($product->product_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Id') ?></th>
                    <td><?= $this->Number->format($product->order_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity Product') ?></th>
                    <td><?= $this->Number->format($product->quantity_product) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($product->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exp Date') ?></th>
                    <td><?= h($product->exp_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
