<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoresausenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoresausenciasTable Test Case
 */
class ConsultoresausenciasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoresausenciasTable
     */
    public $Consultoresausencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultoresausencias',
        'app.Consultores',
        'app.Statusfuncionals',
        'app.Consultoresausenciastipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultoresausencias') ? [] : ['className' => ConsultoresausenciasTable::class];
        $this->Consultoresausencias = TableRegistry::getTableLocator()->get('Consultoresausencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultoresausencias);

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
