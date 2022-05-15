<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropostasalocsagendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropostasalocsagendasTable Test Case
 */
class PropostasalocsagendasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PropostasalocsagendasTable
     */
    public $Propostasalocsagendas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Propostasalocsagendas',
        'app.Propostasalocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Propostasalocsagendas') ? [] : ['className' => PropostasalocsagendasTable::class];
        $this->Propostasalocsagendas = TableRegistry::getTableLocator()->get('Propostasalocsagendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Propostasalocsagendas);

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
