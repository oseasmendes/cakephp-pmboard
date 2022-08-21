<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FupchamadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FupchamadosTable Test Case
 */
class FupchamadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FupchamadosTable
     */
    public $Fupchamados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fupchamados',
        'app.Fupagendas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fupchamados') ? [] : ['className' => FupchamadosTable::class];
        $this->Fupchamados = TableRegistry::getTableLocator()->get('Fupchamados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fupchamados);

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
