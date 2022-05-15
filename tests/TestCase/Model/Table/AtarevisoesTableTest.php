<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtarevisoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtarevisoesTable Test Case
 */
class AtarevisoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtarevisoesTable
     */
    public $Atarevisoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atarevisoes',
        'app.Atas',
        'app.Participantes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atarevisoes') ? [] : ['className' => AtarevisoesTable::class];
        $this->Atarevisoes = TableRegistry::getTableLocator()->get('Atarevisoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atarevisoes);

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
