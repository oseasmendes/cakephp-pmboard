<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosTable Test Case
 */
class ProjetosprodutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosTable
     */
    public $Projetosprodutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutos',
        'app.Projetos',
        'app.Statusfuncionals',
        'app.Agendaanual',
        'app.Projetosprodutosentregas',
        'app.Projetosprodutosfeedbacks',
        'app.Projetosprodutosnotas',
        'app.Projetosprodutosparetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutos') ? [] : ['className' => ProjetosprodutosTable::class];
        $this->Projetosprodutos = TableRegistry::getTableLocator()->get('Projetosprodutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutos);

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
