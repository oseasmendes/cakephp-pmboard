<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FupagendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FupagendasTable Test Case
 */
class FupagendasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FupagendasTable
     */
    public $Fupagendas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fupagendas',
        'app.Fupqueues',
        'app.Statusfuncionals',
        'app.Fupdeployed',
        'app.Fupinprogres',
        'app.Fupnotstarted'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fupagendas') ? [] : ['className' => FupagendasTable::class];
        $this->Fupagendas = TableRegistry::getTableLocator()->get('Fupagendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fupagendas);

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
