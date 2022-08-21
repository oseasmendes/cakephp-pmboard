<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosentregasreqsscriptsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosentregasreqsscriptsTable Test Case
 */
class ProjetosentregasreqsscriptsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosentregasreqsscriptsTable
     */
    public $Projetosentregasreqsscripts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosentregasreqsscripts',
        'app.Projetosentregasreqsreves'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosentregasreqsscripts') ? [] : ['className' => ProjetosentregasreqsscriptsTable::class];
        $this->Projetosentregasreqsscripts = TableRegistry::getTableLocator()->get('Projetosentregasreqsscripts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosentregasreqsscripts);

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
