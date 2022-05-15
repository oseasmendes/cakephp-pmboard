<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ProjetosblockpointsComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ProjetosblockpointsComponent Test Case
 */
class ProjetosblockpointsComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\ProjetosblockpointsComponent
     */
    public $Projetosblockpoints;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Projetosblockpoints = new ProjetosblockpointsComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosblockpoints);

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
