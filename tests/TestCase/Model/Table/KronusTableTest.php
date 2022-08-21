<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KronusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KronusTable Test Case
 */
class KronusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KronusTable
     */
    public $Kronus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Kronus',
        'app.Kronusplans',
        'app.Flags',
        'app.Fases'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Kronus') ? [] : ['className' => KronusTable::class];
        $this->Kronus = TableRegistry::getTableLocator()->get('Kronus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kronus);

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
