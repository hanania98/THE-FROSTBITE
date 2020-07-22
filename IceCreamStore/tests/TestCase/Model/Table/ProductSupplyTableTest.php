<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductSupplyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductSupplyTable Test Case
 */
class ProductSupplyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductSupplyTable
     */
    protected $ProductSupply;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductSupply',
        'app.Product',
        'app.Supply',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProductSupply') ? [] : ['className' => ProductSupplyTable::class];
        $this->ProductSupply = TableRegistry::getTableLocator()->get('ProductSupply', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductSupply);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
