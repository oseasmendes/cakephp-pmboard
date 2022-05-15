<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosblockpointsflsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosblockpointsflsTable Test Case
 */
class ProjetosblockpointsflsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosblockpointsflsTable
     */
    public $Projetosblockpointsfls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosblockpointsfls',
        'app.Projetosblockpoints'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosblockpointsfls') ? [] : ['className' => ProjetosblockpointsflsTable::class];
        $this->Projetosblockpointsfls = TableRegistry::getTableLocator()->get('Projetosblockpointsfls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosblockpointsfls);

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
