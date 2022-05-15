<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SprinttiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SprinttiposTable Test Case
 */
class SprinttiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SprinttiposTable
     */
    public $Sprinttipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sprinttipos',
        'app.Projetosprodutossprints'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sprinttipos') ? [] : ['className' => SprinttiposTable::class];
        $this->Sprinttipos = TableRegistry::getTableLocator()->get('Sprinttipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sprinttipos);

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
