<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientesalocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientesalocsTable Test Case
 */
class ClientesalocsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientesalocsTable
     */
    public $Clientesalocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Clientesalocs',
        'app.Clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Clientesalocs') ? [] : ['className' => ClientesalocsTable::class];
        $this->Clientesalocs = TableRegistry::getTableLocator()->get('Clientesalocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clientesalocs);

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
