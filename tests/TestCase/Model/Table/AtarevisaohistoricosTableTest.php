<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtarevisaohistoricosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtarevisaohistoricosTable Test Case
 */
class AtarevisaohistoricosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtarevisaohistoricosTable
     */
    public $Atarevisaohistoricos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atarevisaohistoricos',
        'app.Atas',
        'app.Atadetalhes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atarevisaohistoricos') ? [] : ['className' => AtarevisaohistoricosTable::class];
        $this->Atarevisaohistoricos = TableRegistry::getTableLocator()->get('Atarevisaohistoricos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atarevisaohistoricos);

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
