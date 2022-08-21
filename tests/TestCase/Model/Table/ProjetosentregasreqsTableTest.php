<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosentregasreqsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosentregasreqsTable Test Case
 */
class ProjetosentregasreqsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosentregasreqsTable
     */
    public $Projetosentregasreqs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosentregasreqs',
        'app.Projetosprodutosentregas',
        'app.Entregastipos',
        'app.Processos',
        'app.Participantes',
        'app.Statusfuncionals',
        'app.Consultores',
        'app.Unidademedidas',
        'app.Frentes',
        'app.Projetosentregasreqsrefs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosentregasreqs') ? [] : ['className' => ProjetosentregasreqsTable::class];
        $this->Projetosentregasreqs = TableRegistry::getTableLocator()->get('Projetosentregasreqs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosentregasreqs);

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
