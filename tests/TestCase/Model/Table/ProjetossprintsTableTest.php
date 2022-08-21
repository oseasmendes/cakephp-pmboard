<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetossprintsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetossprintsTable Test Case
 */
class ProjetossprintsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetossprintsTable
     */
    public $Projetossprints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetossprints',
        'app.Projetos',
        'app.Sprinttipos',
        'app.Jiraetlversions',
        'app.Projetossprintsforecasts',
        'app.Projetossprintsitems',
        'app.Projetossprintsrealizados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetossprints') ? [] : ['className' => ProjetossprintsTable::class];
        $this->Projetossprints = TableRegistry::getTableLocator()->get('Projetossprints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetossprints);

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
