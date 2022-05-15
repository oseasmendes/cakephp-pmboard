<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParetosTable Test Case
 */
class ParetosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParetosTable
     */
    public $Paretos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Paretos',
        'app.Projetosentregasparetos',
        'app.Projetosparetos',
        'app.Projetosprodutosentregas',
        'app.Projetosprodutosparetos',
        'app.ViewKanbanentregas',
        'app.Paretosmestres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Paretos') ? [] : ['className' => ParetosTable::class];
        $this->Paretos = TableRegistry::getTableLocator()->get('Paretos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paretos);

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
