<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramasnotasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramasnotasTable Test Case
 */
class ProgramasnotasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramasnotasTable
     */
    public $Programasnotas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Programasnotas',
        'app.Notatipos',
        'app.Programas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Programasnotas') ? [] : ['className' => ProgramasnotasTable::class];
        $this->Programasnotas = TableRegistry::getTableLocator()->get('Programasnotas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Programasnotas);

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
