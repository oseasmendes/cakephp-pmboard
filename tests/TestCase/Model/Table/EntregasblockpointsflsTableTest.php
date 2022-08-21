<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntregasblockpointsflsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntregasblockpointsflsTable Test Case
 */
class EntregasblockpointsflsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EntregasblockpointsflsTable
     */
    public $Entregasblockpointsfls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Entregasblockpointsfls',
        'app.Entregasblockpoints'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Entregasblockpointsfls') ? [] : ['className' => EntregasblockpointsflsTable::class];
        $this->Entregasblockpointsfls = TableRegistry::getTableLocator()->get('Entregasblockpointsfls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entregasblockpointsfls);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
