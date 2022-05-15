<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IntegrationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IntegrationsTable Test Case
 */
class IntegrationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IntegrationsTable
     */
    public $Integrations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Integrations',
        'app.Bancos',
        'app.Tecnologias',
        'app.Sistemascfgintegrations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Integrations') ? [] : ['className' => IntegrationsTable::class];
        $this->Integrations = TableRegistry::getTableLocator()->get('Integrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Integrations);

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
