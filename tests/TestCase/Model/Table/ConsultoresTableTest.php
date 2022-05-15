<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoresTable Test Case
 */
class ConsultoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoresTable
     */
    public $Consultores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultores',
        'app.Departamentos',
        'app.Superiorimediatos',
        'app.Consultorias',
        'app.Fivewthreehs',
        'app.Projetosalocs',
        'app.Projetosapontamentos',
        'app.Sistemasconsultores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultores') ? [] : ['className' => ConsultoresTable::class];
        $this->Consultores = TableRegistry::getTableLocator()->get('Consultores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultores);

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
