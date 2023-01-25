<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemascfgtablesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemascfgtablesTable Test Case
 */
class SistemascfgtablesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemascfgtablesTable
     */
    public $Sistemascfgtables;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemascfgtables',
        'app.Sistemas',
        'app.Sistemasmodulos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemascfgtables') ? [] : ['className' => SistemascfgtablesTable::class];
        $this->Sistemascfgtables = TableRegistry::getTableLocator()->get('Sistemascfgtables', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemascfgtables);

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
