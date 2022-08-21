<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ProjetosprodutosentregasComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ProjetosprodutosentregasComponent Test Case
 */
class ProjetosprodutosentregasComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\ProjetosprodutosentregasComponent
     */
    public $Projetosprodutosentregas;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Projetosprodutosentregas = new ProjetosprodutosentregasComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosentregas);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
