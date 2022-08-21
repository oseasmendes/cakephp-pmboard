<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosriscosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosriscosTable Test Case
 */
class ProjetosprodutosriscosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosriscosTable
     */
    public $Projetosprodutosriscos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosriscos',
        'app.Projetosprodutos',
        'app.Riscos',
        'app.Aplicabilidades',
        'app.Projetosprodutosriscosimpactos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutosriscos') ? [] : ['className' => ProjetosprodutosriscosTable::class];
        $this->Projetosprodutosriscos = TableRegistry::getTableLocator()->get('Projetosprodutosriscos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosriscos);

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
