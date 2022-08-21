<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApontamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApontamentosTable Test Case
 */
class ApontamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApontamentosTable
     */
    public $Apontamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Apontamentos',
        'app.Consultores',
        'app.Atividades',
        'app.Projetosprodutosentregas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Apontamentos') ? [] : ['className' => ApontamentosTable::class];
        $this->Apontamentos = TableRegistry::getTableLocator()->get('Apontamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Apontamentos);

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
