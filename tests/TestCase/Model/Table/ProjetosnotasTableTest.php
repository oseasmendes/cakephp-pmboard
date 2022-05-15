<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosnotasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosnotasTable Test Case
 */
class ProjetosnotasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosnotasTable
     */
    public $Projetosnotas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosnotas',
        'app.Notatipos',
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
        $config = TableRegistry::getTableLocator()->exists('Projetosnotas') ? [] : ['className' => ProjetosnotasTable::class];
        $this->Projetosnotas = TableRegistry::getTableLocator()->get('Projetosnotas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosnotas);

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
