<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgendatiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgendatiposTable Test Case
 */
class AgendatiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgendatiposTable
     */
    public $Agendatipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Agendatipos',
        'app.Agendas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Agendatipos') ? [] : ['className' => AgendatiposTable::class];
        $this->Agendatipos = TableRegistry::getTableLocator()->get('Agendatipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agendatipos);

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
