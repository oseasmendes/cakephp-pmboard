<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasdepartamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasdepartamentosTable Test Case
 */
class SistemasdepartamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasdepartamentosTable
     */
    public $Sistemasdepartamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasdepartamentos',
        'app.Sistemas',
        'app.Departamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasdepartamentos') ? [] : ['className' => SistemasdepartamentosTable::class];
        $this->Sistemasdepartamentos = TableRegistry::getTableLocator()->get('Sistemasdepartamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasdepartamentos);

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
