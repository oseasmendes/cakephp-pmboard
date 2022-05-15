<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnidademedidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnidademedidasTable Test Case
 */
class UnidademedidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UnidademedidasTable
     */
    public $Unidademedidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Unidademedidas',
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
        $config = TableRegistry::getTableLocator()->exists('Unidademedidas') ? [] : ['className' => UnidademedidasTable::class];
        $this->Unidademedidas = TableRegistry::getTableLocator()->get('Unidademedidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Unidademedidas);

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
