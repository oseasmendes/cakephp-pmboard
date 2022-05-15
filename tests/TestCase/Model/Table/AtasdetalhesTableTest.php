<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtasdetalhesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtasdetalhesTable Test Case
 */
class AtasdetalhesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtasdetalhesTable
     */
    public $Atasdetalhes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atasdetalhes',
        'app.Atas',
        'app.Participantes',
        'app.Etapas',
        'app.Atividades',
        'app.Fivewthreehs',
        'app.Processos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atasdetalhes') ? [] : ['className' => AtasdetalhesTable::class];
        $this->Atasdetalhes = TableRegistry::getTableLocator()->get('Atasdetalhes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atasdetalhes);

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
