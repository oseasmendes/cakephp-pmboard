<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosentregasparetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosentregasparetosTable Test Case
 */
class ProjetosentregasparetosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosentregasparetosTable
     */
    public $Projetosentregasparetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosentregasparetos',
        'app.Projetosprodutosentregas',
        'app.Paretos',
        'app.Motivos',
        'app.Responsabilidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosentregasparetos') ? [] : ['className' => ProjetosentregasparetosTable::class];
        $this->Projetosentregasparetos = TableRegistry::getTableLocator()->get('Projetosentregasparetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosentregasparetos);

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
