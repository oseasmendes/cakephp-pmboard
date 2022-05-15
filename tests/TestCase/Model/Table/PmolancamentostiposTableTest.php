<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PmolancamentostiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PmolancamentostiposTable Test Case
 */
class PmolancamentostiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PmolancamentostiposTable
     */
    public $Pmolancamentostipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pmolancamentostipos',
        'app.Pmocapacitytransactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pmolancamentostipos') ? [] : ['className' => PmolancamentostiposTable::class];
        $this->Pmolancamentostipos = TableRegistry::getTableLocator()->get('Pmolancamentostipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pmolancamentostipos);

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
