<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosapontamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosapontamentosTable Test Case
 */
class ProjetosapontamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosapontamentosTable
     */
    public $Projetosapontamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosapontamentos',
        'app.Consultores',
        'app.Projetosprodutosentregas',
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
        $config = TableRegistry::getTableLocator()->exists('Projetosapontamentos') ? [] : ['className' => ProjetosapontamentosTable::class];
        $this->Projetosapontamentos = TableRegistry::getTableLocator()->get('Projetosapontamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosapontamentos);

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
