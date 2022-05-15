<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemascfgfrontsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemascfgfrontsTable Test Case
 */
class SistemascfgfrontsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemascfgfrontsTable
     */
    public $Sistemascfgfronts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemascfgfronts',
        'app.Tecnologias',
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
        $config = TableRegistry::getTableLocator()->exists('Sistemascfgfronts') ? [] : ['className' => SistemascfgfrontsTable::class];
        $this->Sistemascfgfronts = TableRegistry::getTableLocator()->get('Sistemascfgfronts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemascfgfronts);

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
