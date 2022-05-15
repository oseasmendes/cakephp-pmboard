<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosentregasflwsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosentregasflwsTable Test Case
 */
class ProjetosprodutosentregasflwsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosentregasflwsTable
     */
    public $Projetosprodutosentregasflws;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosentregasflws',
        'app.Projetosprodutosentregas',
        'app.Motivos',
        'app.Statusfuncionals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutosentregasflws') ? [] : ['className' => ProjetosprodutosentregasflwsTable::class];
        $this->Projetosprodutosentregasflws = TableRegistry::getTableLocator()->get('Projetosprodutosentregasflws', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosentregasflws);

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
