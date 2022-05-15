<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntregastiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntregastiposTable Test Case
 */
class EntregastiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EntregastiposTable
     */
    public $Entregastipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Entregastipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Entregastipos') ? [] : ['className' => EntregastiposTable::class];
        $this->Entregastipos = TableRegistry::getTableLocator()->get('Entregastipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entregastipos);

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
