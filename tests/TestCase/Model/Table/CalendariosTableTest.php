<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalendariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalendariosTable Test Case
 */
class CalendariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalendariosTable
     */
    public $Calendarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Calendarios',
        'app.Calendariosplanos',
        'app.Empresas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Calendarios') ? [] : ['className' => CalendariosTable::class];
        $this->Calendarios = TableRegistry::getTableLocator()->get('Calendarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Calendarios);

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
