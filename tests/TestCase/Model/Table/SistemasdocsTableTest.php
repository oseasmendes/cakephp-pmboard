<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasdocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasdocsTable Test Case
 */
class SistemasdocsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasdocsTable
     */
    public $Sistemasdocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasdocs',
        'app.Sistemas',
        'app.Documentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasdocs') ? [] : ['className' => SistemasdocsTable::class];
        $this->Sistemasdocs = TableRegistry::getTableLocator()->get('Sistemasdocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasdocs);

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
