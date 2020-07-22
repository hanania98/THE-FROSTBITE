<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupplyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupplyTable Test Case
 */
class SupplyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SupplyTable
     */
    protected $Supply;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Supply',
        'app.Product',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Supply') ? [] : ['className' => SupplyTable::class];
        $this->Supply = TableRegistry::getTableLocator()->get('Supply', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Supply);

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
