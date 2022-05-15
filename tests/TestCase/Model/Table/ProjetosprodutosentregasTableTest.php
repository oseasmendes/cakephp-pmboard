<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosentregasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosentregasTable Test Case
 */
class ProjetosprodutosentregasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosentregasTable
     */
    public $Projetosprodutosentregas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosentregas',
        'app.Projetosprodutos',
        'app.Sistemas',
        'app.Statusfuncionals',
        'app.Paretos',
        'app.Unidademedidas',
        'app.Agendaanual',
        'app.Projetosapontamentos',
        'app.Projetosentregasparetos',
        'app.ViewKanbanentregas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutosentregas') ? [] : ['className' => ProjetosprodutosentregasTable::class];
        $this->Projetosprodutosentregas = TableRegistry::getTableLocator()->get('Projetosprodutosentregas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosentregas);

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
