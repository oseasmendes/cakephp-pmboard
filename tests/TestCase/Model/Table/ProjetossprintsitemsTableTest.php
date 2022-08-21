<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetossprintsitemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetossprintsitemsTable Test Case
 */
class ProjetossprintsitemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetossprintsitemsTable
     */
    public $Projetossprintsitems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetossprintsitems',
        'app.Projetossprints',
        'app.Projetosprodutosentregas',
        'app.Statusfuncionals',
        'app.Paretos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetossprintsitems') ? [] : ['className' => ProjetossprintsitemsTable::class];
        $this->Projetossprintsitems = TableRegistry::getTableLocator()->get('Projetossprintsitems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetossprintsitems);

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
