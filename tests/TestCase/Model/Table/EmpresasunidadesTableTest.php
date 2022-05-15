<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresasunidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresasunidadesTable Test Case
 */
class EmpresasunidadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresasunidadesTable
     */
    public $Empresasunidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Empresasunidades',
        'app.Empresas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Empresasunidades') ? [] : ['className' => EmpresasunidadesTable::class];
        $this->Empresasunidades = TableRegistry::getTableLocator()->get('Empresasunidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Empresasunidades);

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
