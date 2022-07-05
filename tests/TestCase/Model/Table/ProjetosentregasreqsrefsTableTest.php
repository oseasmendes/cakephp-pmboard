<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosentregasreqsrefsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosentregasreqsrefsTable Test Case
 */
class ProjetosentregasreqsrefsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosentregasreqsrefsTable
     */
    public $Projetosentregasreqsrefs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosentregasreqsrefs',
        'app.Projetosentregasreqs',
        'app.Requisitostipos',
        'app.Statusfuncionals',
        'app.Projetosentregasreqsrefsimgs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosentregasreqsrefs') ? [] : ['className' => ProjetosentregasreqsrefsTable::class];
        $this->Projetosentregasreqsrefs = TableRegistry::getTableLocator()->get('Projetosentregasreqsrefs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosentregasreqsrefs);

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
