<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosalocsnotasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosalocsnotasTable Test Case
 */
class ProjetosalocsnotasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosalocsnotasTable
     */
    public $Projetosalocsnotas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosalocsnotas',
        'app.Notatipos',
        'app.Projetosalocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosalocsnotas') ? [] : ['className' => ProjetosalocsnotasTable::class];
        $this->Projetosalocsnotas = TableRegistry::getTableLocator()->get('Projetosalocsnotas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosalocsnotas);

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
