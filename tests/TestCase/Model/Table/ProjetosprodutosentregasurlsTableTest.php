<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosentregasurlsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosentregasurlsTable Test Case
 */
class ProjetosprodutosentregasurlsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosentregasurlsTable
     */
    public $Projetosprodutosentregasurls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosentregasurls',
        'app.Projetosprodutosentregas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutosentregasurls') ? [] : ['className' => ProjetosprodutosentregasurlsTable::class];
        $this->Projetosprodutosentregasurls = TableRegistry::getTableLocator()->get('Projetosprodutosentregasurls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosentregasurls);

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
