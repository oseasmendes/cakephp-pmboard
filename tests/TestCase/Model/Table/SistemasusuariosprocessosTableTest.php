<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasusuariosprocessosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasusuariosprocessosTable Test Case
 */
class SistemasusuariosprocessosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasusuariosprocessosTable
     */
    public $Sistemasusuariosprocessos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasusuariosprocessos',
        'app.Sistemasusuarios',
        'app.Processos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasusuariosprocessos') ? [] : ['className' => SistemasusuariosprocessosTable::class];
        $this->Sistemasusuariosprocessos = TableRegistry::getTableLocator()->get('Sistemasusuariosprocessos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasusuariosprocessos);

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
