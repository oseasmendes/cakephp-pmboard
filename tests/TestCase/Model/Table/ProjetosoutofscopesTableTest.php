<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosoutofscopesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosoutofscopesTable Test Case
 */
class ProjetosoutofscopesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosoutofscopesTable
     */
    public $Projetosoutofscopes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosoutofscopes',
        'app.Projetosprodutos',
        'app.Statusfunctionals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosoutofscopes') ? [] : ['className' => ProjetosoutofscopesTable::class];
        $this->Projetosoutofscopes = TableRegistry::getTableLocator()->get('Projetosoutofscopes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosoutofscopes);

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
