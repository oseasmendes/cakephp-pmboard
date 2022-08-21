<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosblockpointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosblockpointsTable Test Case
 */
class ProjetosblockpointsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosblockpointsTable
     */
    public $Projetosblockpoints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosblockpoints',
        'app.Projetos',
        'app.Statusfuncionals',
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
        $config = TableRegistry::getTableLocator()->exists('Projetosblockpoints') ? [] : ['className' => ProjetosblockpointsTable::class];
        $this->Projetosblockpoints = TableRegistry::getTableLocator()->get('Projetosblockpoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosblockpoints);

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
