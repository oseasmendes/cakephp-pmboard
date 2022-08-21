<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PillarsareasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PillarsareasTable Test Case
 */
class PillarsareasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PillarsareasTable
     */
    public $Pillarsareas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pillarsareas',
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
        $config = TableRegistry::getTableLocator()->exists('Pillarsareas') ? [] : ['className' => PillarsareasTable::class];
        $this->Pillarsareas = TableRegistry::getTableLocator()->get('Pillarsareas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pillarsareas);

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
