<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogbooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogbooksTable Test Case
 */
class LogbooksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogbooksTable
     */
    public $Logbooks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Logbooks',
        'app.Programas',
        'app.Atividadetipos',
        'app.Logbooksitems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Logbooks') ? [] : ['className' => LogbooksTable::class];
        $this->Logbooks = TableRegistry::getTableLocator()->get('Logbooks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Logbooks);

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
