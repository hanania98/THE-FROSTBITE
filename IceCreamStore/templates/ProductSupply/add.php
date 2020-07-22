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
            <?= $this->Html->link(__('List Product Supply'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productSupply form content">
            <?= $this->Form->create($productSupply) ?>
            <fieldset>
                <legend><?= __('Add Product Supply') ?></legend>
                <?php
                    echo $this->Form->control('product_id');
                    echo $this->Form->control('supply_id');
                    echo $this->Form->control('product_supply_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
