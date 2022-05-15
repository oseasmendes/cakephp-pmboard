<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EsupportsetlprodutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EsupportsetlprodutosTable Test Case
 */
class EsupportsetlprodutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EsupportsetlprodutosTable
     */
    public $Esupportsetlprodutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Esupportsetlprodutos',
        'app.Projetos',
        'app.Projetosprodutos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Esupportsetlprodutos') ? [] : ['className' => EsupportsetlprodutosTable::class];
        $this->Esupportsetlprodutos = TableRegistry::getTableLocator()->get('Esupportsetlprodutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Esupportsetlprodutos);

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
