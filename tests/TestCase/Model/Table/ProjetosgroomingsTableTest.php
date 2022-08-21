<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosgroomingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosgroomingsTable Test Case
 */
class ProjetosgroomingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosgroomingsTable
     */
    public $Projetosgroomings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosgroomings',
        'app.Projetossprints',
        'app.Projetosgroomingsitems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosgroomings') ? [] : ['className' => ProjetosgroomingsTable::class];
        $this->Projetosgroomings = TableRegistry::getTableLocator()->get('Projetosgroomings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosgroomings);

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
