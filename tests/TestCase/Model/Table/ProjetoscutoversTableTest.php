<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetoscutoversTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetoscutoversTable Test Case
 */
class ProjetoscutoversTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetoscutoversTable
     */
    public $Projetoscutovers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetoscutovers',
        'app.Projetos',
        'app.Projetosprodutos',
        'app.Etapas',
        'app.Statusfuncionals',
        'app.Projetoscutoversflws'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetoscutovers') ? [] : ['className' => ProjetoscutoversTable::class];
        $this->Projetoscutovers = TableRegistry::getTableLocator()->get('Projetoscutovers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetoscutovers);

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
