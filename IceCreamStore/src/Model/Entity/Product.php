<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $product_id
 * @property int $order_id
 * @property string $name_product
 * @property int $quantity_product
 * @property \Cake\I18n\FrozenTime $date
 * @property string $type
 * @property \Cake\I18n\FrozenDate $exp_date
 * @property string $product_expenditure
 *
 * @property \App\Model\Entity\OrderDetail $order_detail
 * @property \App\Model\Entity\Supply[] $supply
 */
class Product extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'order_id' => true,
        'name_product' => true,
        'quantity_product' => true,
        'date' => true,
        'type' => true,
        'exp_date' => true,
        'product_expenditure' => true,
        'order_detail' => true,
        'supply' => true,
    ];
}
