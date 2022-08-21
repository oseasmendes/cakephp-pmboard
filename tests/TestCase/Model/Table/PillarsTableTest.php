<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PillarsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PillarsTable Test Case
 */
class PillarsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PillarsTable
     */
    public $Pillars;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pillars',
        'app.Projetossprintsretrosactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pillars') ? [] : ['className' => PillarsTable::class];
        $this->Pillars = TableRegistry::getTableLocator()->get('Pillars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pillars);

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
