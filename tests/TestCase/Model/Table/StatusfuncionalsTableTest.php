<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusfuncionalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusfuncionalsTable Test Case
 */
class StatusfuncionalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusfuncionalsTable
     */
    public $Statusfuncionals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Statusfuncionals',
        'app.Fivewthreehs',
        'app.Projetos',
        'app.Projetosalocs',
        'app.Projetosalocsprofiles',
        'app.Projetosapontamentos',
        'app.Projetosprodutos',
        'app.Projetosprodutosentregas',
        'app.Projetosprodutosfinances',
        'app.Projetosprodutosruns',
        'app.Projetosstatus',
        'app.Sistemas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Statusfuncionals') ? [] : ['className' => StatusfuncionalsTable::class];
        $this->Statusfuncionals = TableRegistry::getTableLocator()->get('Statusfuncionals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Statusfuncionals);

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
