<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RiscosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RiscosTable Test Case
 */
class RiscosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RiscosTable
     */
    public $Riscos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Riscos',
        'app.Riscoscategorias',
        'app.Sistemasriscos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Riscos') ? [] : ['className' => RiscosTable::class];
        $this->Riscos = TableRegistry::getTableLocator()->get('Riscos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Riscos);

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
