<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemascfgtransactionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemascfgtransactionsTable Test Case
 */
class SistemascfgtransactionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemascfgtransactionsTable
     */
    public $Sistemascfgtransactions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemascfgtransactions',
        'app.Sistemas',
        'app.Sistemascfgintegrations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemascfgtransactions') ? [] : ['className' => SistemascfgtransactionsTable::class];
        $this->Sistemascfgtransactions = TableRegistry::getTableLocator()->get('Sistemascfgtransactions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemascfgtransactions);

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
