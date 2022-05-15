<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemaproactionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemaproactionsTable Test Case
 */
class SistemaproactionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemaproactionsTable
     */
    public $Sistemaproactions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemaproactions',
        'app.Sistemasprocessos',
        'app.Eventos',
        'app.Sistemaprosteps'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemaproactions') ? [] : ['className' => SistemaproactionsTable::class];
        $this->Sistemaproactions = TableRegistry::getTableLocator()->get('Sistemaproactions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemaproactions);

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
