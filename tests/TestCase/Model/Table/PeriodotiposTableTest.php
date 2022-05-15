<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodotiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodotiposTable Test Case
 */
class PeriodotiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodotiposTable
     */
    public $Periodotipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Periodotipos',
        'app.Propostasalocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Periodotipos') ? [] : ['className' => PeriodotiposTable::class];
        $this->Periodotipos = TableRegistry::getTableLocator()->get('Periodotipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Periodotipos);

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
