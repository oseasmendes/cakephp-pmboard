<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoriasTable Test Case
 */
class ConsultoriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoriasTable
     */
    public $Consultorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultorias',
        'app.Consultores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultorias') ? [] : ['className' => ConsultoriasTable::class];
        $this->Consultorias = TableRegistry::getTableLocator()->get('Consultorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultorias);

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
