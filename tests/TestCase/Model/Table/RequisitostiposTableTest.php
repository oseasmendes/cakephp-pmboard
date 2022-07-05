<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequisitostiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequisitostiposTable Test Case
 */
class RequisitostiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RequisitostiposTable
     */
    public $Requisitostipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Requisitostipos',
        'app.Projetosentregasreqsrefs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Requisitostipos') ? [] : ['className' => RequisitostiposTable::class];
        $this->Requisitostipos = TableRegistry::getTableLocator()->get('Requisitostipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Requisitostipos);

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
}
