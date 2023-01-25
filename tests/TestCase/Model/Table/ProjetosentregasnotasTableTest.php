<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosentregasnotasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosentregasnotasTable Test Case
 */
class ProjetosentregasnotasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosentregasnotasTable
     */
    public $Projetosentregasnotas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosentregasnotas',
        'app.Projetosprodutosentregas',
        'app.Notatipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosentregasnotas') ? [] : ['className' => ProjetosentregasnotasTable::class];
        $this->Projetosentregasnotas = TableRegistry::getTableLocator()->get('Projetosentregasnotas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosentregasnotas);

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
