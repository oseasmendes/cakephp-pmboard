<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosentregasdiariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosentregasdiariosTable Test Case
 */
class ProjetosprodutosentregasdiariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosentregasdiariosTable
     */
    public $Projetosprodutosentregasdiarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosentregasdiarios',
        'app.Projetosprodutosentregas',
        'app.Consultores',
        'app.Fivewthreehs',
        'app.Statusfuncionals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutosentregasdiarios') ? [] : ['className' => ProjetosprodutosentregasdiariosTable::class];
        $this->Projetosprodutosentregasdiarios = TableRegistry::getTableLocator()->get('Projetosprodutosentregasdiarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosentregasdiarios);

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
