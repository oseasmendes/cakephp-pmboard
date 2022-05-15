<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetossprintsretrosactionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetossprintsretrosactionsTable Test Case
 */
class ProjetossprintsretrosactionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetossprintsretrosactionsTable
     */
    public $Projetossprintsretrosactions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetossprintsretrosactions',
        'app.Projetossprintsretrositems',
        'app.Consultores',
        'app.Pillars',
        'app.Pillarsareas',
        'app.Pillarsresponsabilities',
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
        $config = TableRegistry::getTableLocator()->exists('Projetossprintsretrosactions') ? [] : ['className' => ProjetossprintsretrosactionsTable::class];
        $this->Projetossprintsretrosactions = TableRegistry::getTableLocator()->get('Projetossprintsretrosactions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetossprintsretrosactions);

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
