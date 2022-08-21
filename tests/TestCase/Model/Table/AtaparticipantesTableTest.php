<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtaparticipantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtaparticipantesTable Test Case
 */
class AtaparticipantesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtaparticipantesTable
     */
    public $Ataparticipantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ataparticipantes',
        'app.Atas',
        'app.Participantes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ataparticipantes') ? [] : ['className' => AtaparticipantesTable::class];
        $this->Ataparticipantes = TableRegistry::getTableLocator()->get('Ataparticipantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ataparticipantes);

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
