<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TodosobservadoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TodosobservadoresTable Test Case
 */
class TodosobservadoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TodosobservadoresTable
     */
    public $Todosobservadores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Todosobservadores',
        'app.Todos',
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
        $config = TableRegistry::getTableLocator()->exists('Todosobservadores') ? [] : ['className' => TodosobservadoresTable::class];
        $this->Todosobservadores = TableRegistry::getTableLocator()->get('Todosobservadores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Todosobservadores);

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
