<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogbooksitemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogbooksitemsTable Test Case
 */
class LogbooksitemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogbooksitemsTable
     */
    public $Logbooksitems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Logbooksitems',
        'app.Projetos',
        'app.Consultores',
        'app.Logbooks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Logbooksitems') ? [] : ['className' => LogbooksitemsTable::class];
        $this->Logbooksitems = TableRegistry::getTableLocator()->get('Logbooksitems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Logbooksitems);

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
