<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CondicoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CondicoesTable Test Case
 */
class CondicoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CondicoesTable
     */
    public $Condicoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Condicoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Condicoes') ? [] : ['className' => CondicoesTable::class];
        $this->Condicoes = TableRegistry::getTableLocator()->get('Condicoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Condicoes);

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
