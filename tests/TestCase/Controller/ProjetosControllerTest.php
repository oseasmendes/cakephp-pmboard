<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProjetosController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProjetosController Test Case
 */
class ProjetosControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetos',
        'app.Programas',
        'app.Statusfuncionals',
        'app.Fases',
        'app.Agendaanual',
        'app.Projetosalocs',
        'app.Projetosnotas',
        'app.Projetosparetos',
        'app.Projetosprodutos',
        'app.Projetosstatus',
        'app.ViewKanbanprojetos',
        'app.ViewProjetotimings'
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
