<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JiraetlagentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JiraetlagentesTable Test Case
 */
class JiraetlagentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JiraetlagentesTable
     */
    public $Jiraetlagentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jiraetlagentes',
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
        $config = TableRegistry::getTableLocator()->exists('Jiraetlagentes') ? [] : ['className' => JiraetlagentesTable::class];
        $this->Jiraetlagentes = TableRegistry::getTableLocator()->get('Jiraetlagentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jiraetlagentes);

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
