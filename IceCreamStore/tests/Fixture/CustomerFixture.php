<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerFixture
 */
class CustomerFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customer';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'customer_Id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Full_Name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'Username' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'Password' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'Email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'Phone_No' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Address' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'Birthday' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Membership' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['customer_Id'], 'length' => []],
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
                'customer_Id' => 1,
                'Full_Name' => 'Lorem ipsum dolor sit amet',
                'Username' => 'Lorem ipsum dolor sit amet',
                'Password' => 'Lorem ipsum dolor sit amet',
                'Email' => 'Lorem ipsum dolor sit amet',
                'Phone_No' => 1,
                'Address' => 'Lorem ipsum dolor sit amet',
                'Birthday' => '2020-07-09',
                'Membership' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
