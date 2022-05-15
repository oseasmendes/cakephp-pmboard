<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosalocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosalocsTable Test Case
 */
class ProjetosprodutosalocsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosalocsTable
     */
    public $Projetosprodutosalocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosalocs',
        'app.Projetosprodutos',
        'app.Consultores',
        'app.Statusfuncionals',
        'app.Tipoalocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutosalocs') ? [] : ['className' => ProjetosprodutosalocsTable::class];
        $this->Projetosprodutosalocs = TableRegistry::getTableLocator()->get('Projetosprodutosalocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosalocs);

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
