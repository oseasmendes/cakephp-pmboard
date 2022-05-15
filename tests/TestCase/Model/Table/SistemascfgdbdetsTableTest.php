<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemascfgdbdetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemascfgdbdetsTable Test Case
 */
class SistemascfgdbdetsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemascfgdbdetsTable
     */
    public $Sistemascfgdbdets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemascfgdbdets',
        'app.Sistemascfgdbs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemascfgdbdets') ? [] : ['className' => SistemascfgdbdetsTable::class];
        $this->Sistemascfgdbdets = TableRegistry::getTableLocator()->get('Sistemascfgdbdets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemascfgdbdets);

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
