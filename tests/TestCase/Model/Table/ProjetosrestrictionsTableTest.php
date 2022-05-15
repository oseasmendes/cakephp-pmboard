<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosrestrictionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosrestrictionsTable Test Case
 */
class ProjetosrestrictionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosrestrictionsTable
     */
    public $Projetosrestrictions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosrestrictions',
        'app.Projetos',
        'app.Statusfuncionals',
        'app.Consultores',
        'app.Projetosrestrictionsfls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosrestrictions') ? [] : ['className' => ProjetosrestrictionsTable::class];
        $this->Projetosrestrictions = TableRegistry::getTableLocator()->get('Projetosrestrictions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosrestrictions);

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
