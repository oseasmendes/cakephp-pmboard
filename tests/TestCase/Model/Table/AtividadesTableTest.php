<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtividadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtividadesTable Test Case
 */
class AtividadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtividadesTable
     */
    public $Atividades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atividades',
        'app.Atasdetalhes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atividades') ? [] : ['className' => AtividadesTable::class];
        $this->Atividades = TableRegistry::getTableLocator()->get('Atividades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atividades);

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
