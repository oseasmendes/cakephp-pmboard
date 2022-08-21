<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasestrategiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasestrategiasTable Test Case
 */
class SistemasestrategiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasestrategiasTable
     */
    public $Sistemasestrategias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasestrategias',
        'app.Estrategias',
        'app.Sistemas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasestrategias') ? [] : ['className' => SistemasestrategiasTable::class];
        $this->Sistemasestrategias = TableRegistry::getTableLocator()->get('Sistemasestrategias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasestrategias);

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
