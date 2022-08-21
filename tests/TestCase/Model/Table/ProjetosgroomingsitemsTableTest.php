<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosgroomingsitemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosgroomingsitemsTable Test Case
 */
class ProjetosgroomingsitemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosgroomingsitemsTable
     */
    public $Projetosgroomingsitems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosgroomingsitems',
        'app.Projetosgroomings',
        'app.Projetosprodutosentregas',
        'app.Statusfuntionals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosgroomingsitems') ? [] : ['className' => ProjetosgroomingsitemsTable::class];
        $this->Projetosgroomingsitems = TableRegistry::getTableLocator()->get('Projetosgroomingsitems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosgroomingsitems);

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
