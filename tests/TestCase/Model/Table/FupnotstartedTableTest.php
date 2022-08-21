<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FupnotstartedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FupnotstartedTable Test Case
 */
class FupnotstartedTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FupnotstartedTable
     */
    public $Fupnotstarted;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fupnotstarted',
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
        $config = TableRegistry::getTableLocator()->exists('Fupnotstarted') ? [] : ['className' => FupnotstartedTable::class];
        $this->Fupnotstarted = TableRegistry::getTableLocator()->get('Fupnotstarted', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fupnotstarted);

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
