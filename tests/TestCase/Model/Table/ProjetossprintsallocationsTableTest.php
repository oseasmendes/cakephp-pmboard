<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetossprintsallocationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetossprintsallocationsTable Test Case
 */
class ProjetossprintsallocationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetossprintsallocationsTable
     */
    public $Projetossprintsallocations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetossprintsallocations',
        'app.Projetossprints',
        'app.Consultores',
        'app.Competencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetossprintsallocations') ? [] : ['className' => ProjetossprintsallocationsTable::class];
        $this->Projetossprintsallocations = TableRegistry::getTableLocator()->get('Projetossprintsallocations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetossprintsallocations);

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
