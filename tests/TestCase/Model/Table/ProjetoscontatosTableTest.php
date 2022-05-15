<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetoscontatosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetoscontatosTable Test Case
 */
class ProjetoscontatosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetoscontatosTable
     */
    public $Projetoscontatos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetoscontatos',
        'app.Projetos',
        'app.Participantes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetoscontatos') ? [] : ['className' => ProjetoscontatosTable::class];
        $this->Projetoscontatos = TableRegistry::getTableLocator()->get('Projetoscontatos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetoscontatos);

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
