<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasareasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasareasTable Test Case
 */
class SistemasareasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasareasTable
     */
    public $Sistemasareas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasareas',
        'app.Sistemas',
        'app.Departamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasareas') ? [] : ['className' => SistemasareasTable::class];
        $this->Sistemasareas = TableRegistry::getTableLocator()->get('Sistemasareas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasareas);

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
