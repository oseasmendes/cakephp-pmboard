<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosentregaschangesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosentregaschangesTable Test Case
 */
class ProjetosentregaschangesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosentregaschangesTable
     */
    public $Projetosentregaschanges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosentregaschanges',
        'app.Projetosentregasreqsreves',
        'app.Motivos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosentregaschanges') ? [] : ['className' => ProjetosentregaschangesTable::class];
        $this->Projetosentregaschanges = TableRegistry::getTableLocator()->get('Projetosentregaschanges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosentregaschanges);

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
