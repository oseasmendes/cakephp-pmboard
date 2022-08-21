<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetossprintsretrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetossprintsretrosTable Test Case
 */
class ProjetossprintsretrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetossprintsretrosTable
     */
    public $Projetossprintsretros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetossprintsretros',
        'app.Projetossprints',
        'app.Paretos',
        'app.Statusfuncionals',
        'app.Projetossprintsretrosactions',
        'app.Projetossprintsretrositems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetossprintsretros') ? [] : ['className' => ProjetossprintsretrosTable::class];
        $this->Projetossprintsretros = TableRegistry::getTableLocator()->get('Projetossprintsretros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetossprintsretros);

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
