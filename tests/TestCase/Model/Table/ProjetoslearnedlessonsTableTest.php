<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetoslearnedlessonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetoslearnedlessonsTable Test Case
 */
class ProjetoslearnedlessonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetoslearnedlessonsTable
     */
    public $Projetoslearnedlessons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetoslearnedlessons',
        'app.Projetos',
        'app.Aproaches',
        'app.Severidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetoslearnedlessons') ? [] : ['className' => ProjetoslearnedlessonsTable::class];
        $this->Projetoslearnedlessons = TableRegistry::getTableLocator()->get('Projetoslearnedlessons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetoslearnedlessons);

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
