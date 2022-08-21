<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasqueuesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasqueuesTable Test Case
 */
class SistemasqueuesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasqueuesTable
     */
    public $Sistemasqueues;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasqueues',
        'app.Sistemas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasqueues') ? [] : ['className' => SistemasqueuesTable::class];
        $this->Sistemasqueues = TableRegistry::getTableLocator()->get('Sistemasqueues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasqueues);

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
