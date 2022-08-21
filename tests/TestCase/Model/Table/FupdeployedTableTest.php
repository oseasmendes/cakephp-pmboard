<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FupdeployedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FupdeployedTable Test Case
 */
class FupdeployedTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FupdeployedTable
     */
    public $Fupdeployed;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fupdeployed',
        'app.Fupagendas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fupdeployed') ? [] : ['className' => FupdeployedTable::class];
        $this->Fupdeployed = TableRegistry::getTableLocator()->get('Fupdeployed', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fupdeployed);

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
