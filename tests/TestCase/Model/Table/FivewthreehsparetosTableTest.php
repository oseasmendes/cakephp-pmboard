<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FivewthreehsparetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FivewthreehsparetosTable Test Case
 */
class FivewthreehsparetosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FivewthreehsparetosTable
     */
    public $Fivewthreehsparetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fivewthreehsparetos',
        'app.Fivewthreehs',
        'app.Paretos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fivewthreehsparetos') ? [] : ['className' => FivewthreehsparetosTable::class];
        $this->Fivewthreehsparetos = TableRegistry::getTableLocator()->get('Fivewthreehsparetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fivewthreehsparetos);

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
