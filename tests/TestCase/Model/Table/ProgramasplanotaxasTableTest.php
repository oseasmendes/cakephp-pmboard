<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramasplanotaxasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramasplanotaxasTable Test Case
 */
class ProgramasplanotaxasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramasplanotaxasTable
     */
    public $Programasplanotaxas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Programasplanotaxas',
        'app.Competencias',
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
        $config = TableRegistry::getTableLocator()->exists('Programasplanotaxas') ? [] : ['className' => ProgramasplanotaxasTable::class];
        $this->Programasplanotaxas = TableRegistry::getTableLocator()->get('Programasplanotaxas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Programasplanotaxas);

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
