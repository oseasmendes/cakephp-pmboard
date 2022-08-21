<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemaprostepsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemaprostepsTable Test Case
 */
class SistemaprostepsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemaprostepsTable
     */
    public $Sistemaprosteps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemaprosteps',
        'app.Sistemaproactions',
        'app.Participantes',
        'app.Consultores',
        'app.Sistemaprostepsfiles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemaprosteps') ? [] : ['className' => SistemaprostepsTable::class];
        $this->Sistemaprosteps = TableRegistry::getTableLocator()->get('Sistemaprosteps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemaprosteps);

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
