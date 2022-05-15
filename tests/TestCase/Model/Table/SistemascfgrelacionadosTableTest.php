<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemascfgrelacionadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemascfgrelacionadosTable Test Case
 */
class SistemascfgrelacionadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemascfgrelacionadosTable
     */
    public $Sistemascfgrelacionados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemascfgrelacionados',
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
        $config = TableRegistry::getTableLocator()->exists('Sistemascfgrelacionados') ? [] : ['className' => SistemascfgrelacionadosTable::class];
        $this->Sistemascfgrelacionados = TableRegistry::getTableLocator()->get('Sistemascfgrelacionados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemascfgrelacionados);

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
