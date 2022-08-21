<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AmbientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AmbientesTable Test Case
 */
class AmbientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AmbientesTable
     */
    public $Ambientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ambientes',
        'app.Projetosprodutosentregas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ambientes') ? [] : ['className' => AmbientesTable::class];
        $this->Ambientes = TableRegistry::getTableLocator()->get('Ambientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ambientes);

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
