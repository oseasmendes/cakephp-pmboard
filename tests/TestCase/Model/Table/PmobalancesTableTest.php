<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PmobalancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PmobalancesTable Test Case
 */
class PmobalancesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PmobalancesTable
     */
    public $Pmobalances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pmobalances',
        'app.Statusfuncionals',
        'app.Pmobalanceconsultores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pmobalances') ? [] : ['className' => PmobalancesTable::class];
        $this->Pmobalances = TableRegistry::getTableLocator()->get('Pmobalances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pmobalances);

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
