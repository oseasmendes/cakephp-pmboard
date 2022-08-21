<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KronusplansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KronusplansTable Test Case
 */
class KronusplansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KronusplansTable
     */
    public $Kronusplans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Kronusplans',
        'app.Projetos',
        'app.Statusfuncionals',
        'app.Kronus',
        'app.Kronusitems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Kronusplans') ? [] : ['className' => KronusplansTable::class];
        $this->Kronusplans = TableRegistry::getTableLocator()->get('Kronusplans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kronusplans);

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
