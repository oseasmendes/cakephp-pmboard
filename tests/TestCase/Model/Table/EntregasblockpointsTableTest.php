<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntregasblockpointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntregasblockpointsTable Test Case
 */
class EntregasblockpointsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EntregasblockpointsTable
     */
    public $Entregasblockpoints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Entregasblockpoints',
        'app.Projetosprodutosentregas',
        'app.Statusfuncionals',
        'app.Consultores',
        'app.Entregasblockpointsfls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Entregasblockpoints') ? [] : ['className' => EntregasblockpointsTable::class];
        $this->Entregasblockpoints = TableRegistry::getTableLocator()->get('Entregasblockpoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entregasblockpoints);

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
