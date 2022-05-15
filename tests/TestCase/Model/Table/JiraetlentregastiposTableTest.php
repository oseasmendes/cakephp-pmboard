<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JiraetlentregastiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JiraetlentregastiposTable Test Case
 */
class JiraetlentregastiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JiraetlentregastiposTable
     */
    public $Jiraetlentregastipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jiraetlentregastipos',
        'app.Entregastipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jiraetlentregastipos') ? [] : ['className' => JiraetlentregastiposTable::class];
        $this->Jiraetlentregastipos = TableRegistry::getTableLocator()->get('Jiraetlentregastipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jiraetlentregastipos);

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
