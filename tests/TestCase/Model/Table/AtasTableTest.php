<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtasTable Test Case
 */
class AtasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtasTable
     */
    public $Atas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atas',
        'app.Projetos',
        'app.Participantes',
        'app.Empresas',
        'app.Conditions',
        'app.Departamentos',
        'app.Tipodocumentos',
        'app.Ataaprovadores',
        'app.Atadetalhes',
        'app.Ataparticipantes',
        'app.Atarevisaohistoricos',
        'app.Atarevisoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atas') ? [] : ['className' => AtasTable::class];
        $this->Atas = TableRegistry::getTableLocator()->get('Atas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atas);

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
