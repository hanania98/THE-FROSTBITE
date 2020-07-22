<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StaffFixture
 */
class StaffFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'staff';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'staff_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'backup_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'staff_name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'staff_username' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'staff_password' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'staff_email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'staff_phone_no' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'staff_address' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'role' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'backup_id' => ['type' => 'index', 'columns' => ['backup_id'], 'length' => []],
            'backup_id_2' => ['type' => 'index', 'columns' => ['backup_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['staff_id'], 'length' => []],
            'backup_id_3' => ['type' => 'unique', 'columns' => ['backup_id'], 'length' => []],
            'staff_ibfk_1' => ['type' => 'foreign', 'columns' => ['backup_id'], 'references' => ['staff', 'staff_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'staff_id' => 1,
                'backup_id' => 1,
                'staff_name' => 'Lorem ipsum dolor sit amet',
                'staff_username' => 'Lorem ipsum dolor sit amet',
                'staff_password' => 'Lorem ipsum dolor sit amet',
                'staff_email' => 'Lorem ipsum dolor sit amet',
                'staff_phone_no' => 1,
                'staff_address' => 'Lorem ipsum dolor sit amet',
                'role' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
