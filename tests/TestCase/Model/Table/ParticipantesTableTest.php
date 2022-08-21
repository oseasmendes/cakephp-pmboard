<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParticipantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParticipantesTable Test Case
 */
class ParticipantesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParticipantesTable
     */
    public $Participantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Participantes',
        'app.Departamentos',
        'app.Empresas',
        'app.Fivewthreehs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Participantes') ? [] : ['className' => ParticipantesTable::class];
        $this->Participantes = TableRegistry::getTableLocator()->get('Participantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Participantes);

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
