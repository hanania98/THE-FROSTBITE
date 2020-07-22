<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerTable Test Case
 */
class CustomerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerTable
     */
    protected $Customer;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Customer',
        'app.OrderDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Customer') ? [] : ['className' => CustomerTable::class];
        $this->Customer = TableRegistry::getTableLocator()->get('Customer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Customer);

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
}
