<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\UploadprostepsimgsComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\UploadprostepsimgsComponent Test Case
 */
class UploadprostepsimgsComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\UploadprostepsimgsComponent
     */
    public $Uploadprostepsimgs;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Uploadprostepsimgs = new UploadprostepsimgsComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Uploadprostepsimgs);

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
