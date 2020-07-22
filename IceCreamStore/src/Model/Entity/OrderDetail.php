<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderDetail Entity
 *
 * @property int $order_id
 * @property int $customer_id
 * @property int $staff_id
 * @property string $list_order_details
 * @property int $total
 * @property int $amount
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Staff $staff
 */
class OrderDetail extends Entity
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
        'customer_id' => true,
        'staff_id' => true,
        'list_order_details' => true,
        'total' => true,
        'amount' => true,
        'customer' => true,
        'staff' => true,
    ];
}
