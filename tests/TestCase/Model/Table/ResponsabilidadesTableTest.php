<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsabilidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsabilidadesTable Test Case
 */
class ResponsabilidadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsabilidadesTable
     */
    public $Responsabilidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Responsabilidades',
        'app.Responsabilidadestipos',
        'app.Motivos',
        'app.Sistemasusuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Responsabilidades') ? [] : ['className' => ResponsabilidadesTable::class];
        $this->Responsabilidades = TableRegistry::getTableLocator()->get('Responsabilidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Responsabilidades);

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
