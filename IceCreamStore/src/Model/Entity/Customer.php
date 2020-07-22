<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $customer_Id
 * @property string $Full_Name
 * @property string $Username
 * @property string $Password
 * @property string $Email
 * @property int $Phone_No
 * @property string $Address
 * @property \Cake\I18n\FrozenDate $Birthday
 * @property string|null $Membership
 *
 * @property \App\Model\Entity\OrderDetail[] $order_details
 */
class Customer extends Entity
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
        'Full_Name' => true,
        'Username' => true,
        'Password' => true,
        'Email' => true,
        'Phone_No' => true,
        'Address' => true,
        'Birthday' => true,
        'Membership' => true,
        'order_details' => true,
    ];
}
