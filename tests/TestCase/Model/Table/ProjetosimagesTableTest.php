<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosimagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosimagesTable Test Case
 */
class ProjetosimagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosimagesTable
     */
    public $Projetosimages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosimages',
        'app.Projetos',
        'app.Imagestipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosimages') ? [] : ['className' => ProjetosimagesTable::class];
        $this->Projetosimages = TableRegistry::getTableLocator()->get('Projetosimages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosimages);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
