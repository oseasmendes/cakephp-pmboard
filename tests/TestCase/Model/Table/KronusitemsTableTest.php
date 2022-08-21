<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KronusitemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KronusitemsTable Test Case
 */
class KronusitemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KronusitemsTable
     */
    public $Kronusitems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Kronusitems',
        'app.Kronusplans',
        'app.Consultores',
        'app.Projetosprodutos',
        'app.Projetosprodutosentregas',
        'app.Projetos',
        'app.Paretos',
        'app.Flags',
        'app.Fases'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Kronusitems') ? [] : ['className' => KronusitemsTable::class];
        $this->Kronusitems = TableRegistry::getTableLocator()->get('Kronusitems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kronusitems);

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
