<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalendariosplanosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalendariosplanosTable Test Case
 */
class CalendariosplanosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalendariosplanosTable
     */
    public $Calendariosplanos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Calendariosplanos',
        'app.Calendariostipos',
        'app.Empresas',
        'app.Calendarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Calendariosplanos') ? [] : ['className' => CalendariosplanosTable::class];
        $this->Calendariosplanos = TableRegistry::getTableLocator()->get('Calendariosplanos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Calendariosplanos);

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
