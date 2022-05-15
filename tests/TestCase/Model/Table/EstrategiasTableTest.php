<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstrategiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstrategiasTable Test Case
 */
class EstrategiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstrategiasTable
     */
    public $Estrategias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Estrategias',
        'app.Sistemasestrategias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Estrategias') ? [] : ['className' => EstrategiasTable::class];
        $this->Estrategias = TableRegistry::getTableLocator()->get('Estrategias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estrategias);

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
