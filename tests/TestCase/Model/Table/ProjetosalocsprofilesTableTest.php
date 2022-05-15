<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosalocsprofilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosalocsprofilesTable Test Case
 */
class ProjetosalocsprofilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosalocsprofilesTable
     */
    public $Projetosalocsprofiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosalocsprofiles',
        'app.Projetosalocs',
        'app.Statusfuncionals',
        'app.Competencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosalocsprofiles') ? [] : ['className' => ProjetosalocsprofilesTable::class];
        $this->Projetosalocsprofiles = TableRegistry::getTableLocator()->get('Projetosalocsprofiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosalocsprofiles);

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
