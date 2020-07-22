<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductSupplyFixture
 */
class ProductSupplyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'product_supply';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'product_supply_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'product_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'supply_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_supply_name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'product_id_fk' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'supply_id_fk' => ['type' => 'index', 'columns' => ['supply_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['product_supply_id'], 'length' => []],
            'product_supply_ibfk_2' => ['type' => 'foreign', 'columns' => ['supply_id'], 'references' => ['supply', 'supply_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'product_supply_ibfk_1' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['product', 'product_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'product_supply_id' => 1,
                'product_id' => 1,
                'supply_id' => 1,
                'product_supply_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
