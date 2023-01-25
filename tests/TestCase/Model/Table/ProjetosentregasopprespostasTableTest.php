<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosentregasopprespostasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosentregasopprespostasTable Test Case
 */
class ProjetosentregasopprespostasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosentregasopprespostasTable
     */
    public $Projetosentregasopprespostas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosentregasopprespostas',
        'app.Projetosentregasopenpoints'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosentregasopprespostas') ? [] : ['className' => ProjetosentregasopprespostasTable::class];
        $this->Projetosentregasopprespostas = TableRegistry::getTableLocator()->get('Projetosentregasopprespostas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosentregasopprespostas);

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
