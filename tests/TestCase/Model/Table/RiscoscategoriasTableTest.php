<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RiscoscategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RiscoscategoriasTable Test Case
 */
class RiscoscategoriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RiscoscategoriasTable
     */
    public $Riscoscategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Riscoscategorias',
        'app.Riscos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Riscoscategorias') ? [] : ['className' => RiscoscategoriasTable::class];
        $this->Riscoscategorias = TableRegistry::getTableLocator()->get('Riscoscategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Riscoscategorias);

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
