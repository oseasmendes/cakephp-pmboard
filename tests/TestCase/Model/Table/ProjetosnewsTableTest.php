<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosnewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosnewsTable Test Case
 */
class ProjetosnewsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosnewsTable
     */
    public $Projetosnews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosnews',
        'app.Projetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosnews') ? [] : ['className' => ProjetosnewsTable::class];
        $this->Projetosnews = TableRegistry::getTableLocator()->get('Projetosnews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosnews);

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
