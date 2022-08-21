<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PillarsresponsabilitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PillarsresponsabilitiesTable Test Case
 */
class PillarsresponsabilitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PillarsresponsabilitiesTable
     */
    public $Pillarsresponsabilities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pillarsresponsabilities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pillarsresponsabilities') ? [] : ['className' => PillarsresponsabilitiesTable::class];
        $this->Pillarsresponsabilities = TableRegistry::getTableLocator()->get('Pillarsresponsabilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pillarsresponsabilities);

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
