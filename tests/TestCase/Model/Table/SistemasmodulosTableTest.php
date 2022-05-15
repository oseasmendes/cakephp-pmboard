<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasmodulosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasmodulosTable Test Case
 */
class SistemasmodulosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasmodulosTable
     */
    public $Sistemasmodulos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasmodulos',
        'app.Sistemas',
        'app.Statusfuncionals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasmodulos') ? [] : ['className' => SistemasmodulosTable::class];
        $this->Sistemasmodulos = TableRegistry::getTableLocator()->get('Sistemasmodulos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasmodulos);

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
