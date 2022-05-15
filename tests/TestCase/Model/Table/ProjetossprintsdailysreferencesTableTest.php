<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetossprintsdailysreferencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetossprintsdailysreferencesTable Test Case
 */
class ProjetossprintsdailysreferencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetossprintsdailysreferencesTable
     */
    public $Projetossprintsdailysreferences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetossprintsdailysreferences',
        'app.Projetossprintsdailies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetossprintsdailysreferences') ? [] : ['className' => ProjetossprintsdailysreferencesTable::class];
        $this->Projetossprintsdailysreferences = TableRegistry::getTableLocator()->get('Projetossprintsdailysreferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetossprintsdailysreferences);

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
