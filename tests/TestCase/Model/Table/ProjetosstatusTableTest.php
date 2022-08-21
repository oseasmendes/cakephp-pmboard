<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosstatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosstatusTable Test Case
 */
class ProjetosstatusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosstatusTable
     */
    public $Projetosstatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosstatus',
        'app.Projetos',
        'app.Statusfuncionals',
        'app.Motivos',
        'app.Responsabilidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosstatus') ? [] : ['className' => ProjetosstatusTable::class];
        $this->Projetosstatus = TableRegistry::getTableLocator()->get('Projetosstatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosstatus);

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
