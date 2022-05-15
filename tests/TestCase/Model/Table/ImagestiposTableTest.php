<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagestiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagestiposTable Test Case
 */
class ImagestiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagestiposTable
     */
    public $Imagestipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Imagestipos',
        'app.Projetosimages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Imagestipos') ? [] : ['className' => ImagestiposTable::class];
        $this->Imagestipos = TableRegistry::getTableLocator()->get('Imagestipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imagestipos);

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
