<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $staff_id
 * @property int $backup_id
 * @property string $staff_name
 * @property string $staff_username
 * @property string $staff_password
 * @property string $staff_email
 * @property int $staff_phone_no
 * @property string $staff_address
 * @property string $role
 *
 * @property \App\Model\Entity\Staff $staff
 */
class Staff extends Entity
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
        'backup_id' => true,
        'staff_name' => true,
        'staff_username' => true,
        'staff_password' => true,
        'staff_email' => true,
        'staff_phone_no' => true,
        'staff_address' => true,
        'role' => true,
        'staff' => true,
    ];
}
