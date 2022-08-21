<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalendariostiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalendariostiposTable Test Case
 */
class CalendariostiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalendariostiposTable
     */
    public $Calendariostipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Calendariostipos',
        'app.Calendariosplanos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Calendariostipos') ? [] : ['className' => CalendariostiposTable::class];
        $this->Calendariostipos = TableRegistry::getTableLocator()->get('Calendariostipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Calendariostipos);

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
