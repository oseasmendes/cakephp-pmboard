<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProjetosprodutosentregasController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProjetosprodutosentregasController Test Case
 */
class ProjetosprodutosentregasControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosentregas',
        'app.Projetosprodutos',
        'app.Sistemas',
        'app.Statusfuncionals',
        'app.Paretos',
        'app.Unidademedidas',
        'app.Agendaanual',
        'app.Projetosapontamentos',
        'app.Projetosentregasparetos',
        'app.ViewKanbanentregas'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
