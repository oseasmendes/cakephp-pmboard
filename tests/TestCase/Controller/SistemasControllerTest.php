<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SistemasController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\SistemasController Test Case
 */
class SistemasControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemas',
        'app.Empresas',
        'app.Departamentos',
        'app.Projetosprodutosentregas',
        'app.Sistemasareas',
        'app.Sistemasbriefings',
        'app.Sistemascfgdbs',
        'app.Sistemascfgfronts',
        'app.Sistemascfgintegrations',
        'app.Sistemascfgrelacionados',
        'app.Sistemasconsultores',
        'app.Sistemasdocs',
        'app.Sistemashistoricos',
        'app.Sistemasriscos',
        'app.Sistemasusuarios'
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
