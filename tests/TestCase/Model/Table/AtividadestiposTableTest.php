<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtividadestiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtividadestiposTable Test Case
 */
class AtividadestiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtividadestiposTable
     */
    public $Atividadestipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atividadestipos',
        'app.Folhaatividadesdetalhes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atividadestipos') ? [] : ['className' => AtividadestiposTable::class];
        $this->Atividadestipos = TableRegistry::getTableLocator()->get('Atividadestipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atividadestipos);

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
