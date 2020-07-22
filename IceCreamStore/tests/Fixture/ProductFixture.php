<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductFixture
 */
class ProductFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'product';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'product_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'order_id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name_product' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'quantity_product' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'type' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        'exp_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'product_expenditure' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'order_id' => ['type' => 'index', 'columns' => ['order_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['product_id'], 'length' => []],
            'product_ibfk_1' => ['type' => 'foreign', 'columns' => ['order_id'], 'references' => ['order_details', 'order_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'product_id' => 1,
                'order_id' => 1,
                'name_product' => 'Lorem ipsum dolor sit amet',
                'quantity_product' => 1,
                'date' => '2020-07-09 15:04:12',
                'type' => 'Lorem ipsum dolor sit amet',
                'exp_date' => '2020-07-09',
                'product_expenditure' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
