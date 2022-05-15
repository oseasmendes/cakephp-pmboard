<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosTable Test Case
 */
class ProjetosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosTable
     */
    public $Projetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetos',
        'app.Programas',
        'app.Statusfuncionals',
        'app.Fases',
        'app.Agendaanual',
        'app.Projetosalocs',
        'app.Projetosnotas',
        'app.Projetosparetos',
        'app.Projetosprodutos',
        'app.Projetosstatus',
        'app.ViewKanbanprojetos',
        'app.ViewProjetotimings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetos') ? [] : ['className' => ProjetosTable::class];
        $this->Projetos = TableRegistry::getTableLocator()->get('Projetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetos);

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
