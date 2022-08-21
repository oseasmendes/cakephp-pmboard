<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetossprintsdailysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetossprintsdailysTable Test Case
 */
class ProjetossprintsdailysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetossprintsdailysTable
     */
    public $Projetossprintsdailys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetossprintsdailys',
        'app.Projetossprints',
        'app.Consultores',
        'app.Projetosprodutosentregas',
        'app.Agendas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetossprintsdailys') ? [] : ['className' => ProjetossprintsdailysTable::class];
        $this->Projetossprintsdailys = TableRegistry::getTableLocator()->get('Projetossprintsdailys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetossprintsdailys);

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
