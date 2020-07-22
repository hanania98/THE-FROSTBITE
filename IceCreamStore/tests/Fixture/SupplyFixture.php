<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SupplyFixture
 */
class SupplyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'supply';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'supply_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name_supply' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'quantity_supply' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'supply_expenditure' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['supply_id'], 'length' => []],
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
                'supply_id' => 1,
                'name_supply' => 'Lorem ipsum dolor sit amet',
                'quantity_supply' => 1,
                'date' => '2020-07-09 15:03:27',
                'supply_expenditure' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
