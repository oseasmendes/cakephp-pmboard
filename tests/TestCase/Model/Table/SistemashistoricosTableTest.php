<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemashistoricosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemashistoricosTable Test Case
 */
class SistemashistoricosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemashistoricosTable
     */
    public $Sistemashistoricos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemashistoricos',
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
        $config = TableRegistry::getTableLocator()->exists('Sistemashistoricos') ? [] : ['className' => SistemashistoricosTable::class];
        $this->Sistemashistoricos = TableRegistry::getTableLocator()->get('Sistemashistoricos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemashistoricos);

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
