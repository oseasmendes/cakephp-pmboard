<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JiraetlparetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JiraetlparetosTable Test Case
 */
class JiraetlparetosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JiraetlparetosTable
     */
    public $Jiraetlparetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jiraetlparetos',
        'app.Paretos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jiraetlparetos') ? [] : ['className' => JiraetlparetosTable::class];
        $this->Jiraetlparetos = TableRegistry::getTableLocator()->get('Jiraetlparetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jiraetlparetos);

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
