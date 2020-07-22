<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $productSupply
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Supply'), ['action' => 'edit', $productSupply->product_supply_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Supply'), ['action' => 'delete', $productSupply->product_supply_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productSupply->product_supply_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Supply'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Supply'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productSupply view content">
            <h3><?= h($productSupply->product_supply_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product Supply Name') ?></th>
                    <td><?= h($productSupply->product_supply_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Supply Id') ?></th>
                    <td><?= $this->Number->format($productSupply->product_supply_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Id') ?></th>
                    <td><?= $this->Number->format($productSupply->product_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supply Id') ?></th>
                    <td><?= $this->Number->format($productSupply->supply_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
