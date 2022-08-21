<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TodoseventosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TodoseventosTable Test Case
 */
class TodoseventosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TodoseventosTable
     */
    public $Todoseventos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Todoseventos',
        'app.Todos',
        'app.Tecnicos',
        'app.Consultores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Todoseventos') ? [] : ['className' => TodoseventosTable::class];
        $this->Todoseventos = TableRegistry::getTableLocator()->get('Todoseventos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Todoseventos);

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
