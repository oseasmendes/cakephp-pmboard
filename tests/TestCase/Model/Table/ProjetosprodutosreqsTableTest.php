<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosreqsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosreqsTable Test Case
 */
class ProjetosprodutosreqsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosreqsTable
     */
    public $Projetosprodutosreqs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosreqs',
        'app.Projetosprodutos',
        'app.Entregastipos',
        'app.Processos',
        'app.Participantes',
        'app.Statusfuncionals',
        'app.Consultores',
        'app.Unidademedidas',
        'app.Frentes',
        'app.Projetosprodutosreqsrefs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutosreqs') ? [] : ['className' => ProjetosprodutosreqsTable::class];
        $this->Projetosprodutosreqs = TableRegistry::getTableLocator()->get('Projetosprodutosreqs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosreqs);

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
