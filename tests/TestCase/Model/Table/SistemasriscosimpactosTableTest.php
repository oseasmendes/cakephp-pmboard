<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasriscosimpactosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasriscosimpactosTable Test Case
 */
class SistemasriscosimpactosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasriscosimpactosTable
     */
    public $Sistemasriscosimpactos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasriscosimpactos',
        'app.Sistemariscos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasriscosimpactos') ? [] : ['className' => SistemasriscosimpactosTable::class];
        $this->Sistemasriscosimpactos = TableRegistry::getTableLocator()->get('Sistemasriscosimpactos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasriscosimpactos);

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
