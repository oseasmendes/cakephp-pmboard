<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FivewthreehsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FivewthreehsTable Test Case
 */
class FivewthreehsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FivewthreehsTable
     */
    public $Fivewthreehs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fivewthreehs',
        'app.Programas',
        'app.Projetos',
        'app.Projetosprodutos',
        'app.Participantes',
        'app.Statusfuncionals',
        'app.Consultores',
        'app.Atas',
        'app.Empresas',
        'app.Fivewthreehstypes',
        'app.Atasdetalhes',
        'app.Fivewthreehsparetos',
        'app.Projetosprodutosentregasdiarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fivewthreehs') ? [] : ['className' => FivewthreehsTable::class];
        $this->Fivewthreehs = TableRegistry::getTableLocator()->get('Fivewthreehs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fivewthreehs);

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
