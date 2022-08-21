<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EtapasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EtapasTable Test Case
 */
class EtapasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EtapasTable
     */
    public $Etapas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Etapas',
        'app.Atadetalhes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Etapas') ? [] : ['className' => EtapasTable::class];
        $this->Etapas = TableRegistry::getTableLocator()->get('Etapas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Etapas);

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
}
