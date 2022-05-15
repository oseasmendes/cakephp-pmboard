<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KnowhowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KnowhowsTable Test Case
 */
class KnowhowsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KnowhowsTable
     */
    public $Knowhows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Knowhows',
        'app.Consultoresvrstecnologias',
        'app.Sistemasconsultores',
        'app.Sistemasusuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Knowhows') ? [] : ['className' => KnowhowsTable::class];
        $this->Knowhows = TableRegistry::getTableLocator()->get('Knowhows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Knowhows);

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
