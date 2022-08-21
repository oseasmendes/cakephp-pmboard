<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtadetalhesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtadetalhesTable Test Case
 */
class AtadetalhesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtadetalhesTable
     */
    public $Atadetalhes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atadetalhes',
        'app.Atas',
        'app.Processos',
        'app.Etapas',
        'app.Kronus',
        'app.Wbs',
        'app.Kronuses',
        'app.Atadetalhedatas',
        'app.Atarevisaohistoricos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atadetalhes') ? [] : ['className' => AtadetalhesTable::class];
        $this->Atadetalhes = TableRegistry::getTableLocator()->get('Atadetalhes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atadetalhes);

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
