<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasbriefingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasbriefingsTable Test Case
 */
class SistemasbriefingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasbriefingsTable
     */
    public $Sistemasbriefings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasbriefings',
        'app.Sistemas',
        'app.Departamentos',
        'app.Smcplans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasbriefings') ? [] : ['className' => SistemasbriefingsTable::class];
        $this->Sistemasbriefings = TableRegistry::getTableLocator()->get('Sistemasbriefings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasbriefings);

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
