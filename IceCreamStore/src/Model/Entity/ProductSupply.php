<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductSupply Entity
 *
 * @property int $product_supply_id
 * @property int $product_id
 * @property int $supply_id
 * @property string $product_supply_name
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Supply $supply
 */
class ProductSupply extends Entity
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
        'product_id' => true,
        'supply_id' => true,
        'product_supply_name' => true,
        'product' => true,
        'supply' => true,
    ];
}
