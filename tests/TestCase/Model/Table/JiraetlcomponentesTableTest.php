<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JiraetlcomponentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JiraetlcomponentesTable Test Case
 */
class JiraetlcomponentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JiraetlcomponentesTable
     */
    public $Jiraetlcomponentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jiraetlcomponentes',
        'app.Projetosprodutos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jiraetlcomponentes') ? [] : ['className' => JiraetlcomponentesTable::class];
        $this->Jiraetlcomponentes = TableRegistry::getTableLocator()->get('Jiraetlcomponentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jiraetlcomponentes);

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
