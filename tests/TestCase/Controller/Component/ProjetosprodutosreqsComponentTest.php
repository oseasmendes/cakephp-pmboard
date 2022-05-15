<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ProjetosprodutosreqsComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ProjetosprodutosreqsComponent Test Case
 */
class ProjetosprodutosreqsComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\ProjetosprodutosreqsComponent
     */
    public $Projetosprodutosreqs;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Projetosprodutosreqs = new ProjetosprodutosreqsComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosreqs);

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
