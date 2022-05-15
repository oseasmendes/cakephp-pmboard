<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EsupportsetlfrentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EsupportsetlfrentesTable Test Case
 */
class EsupportsetlfrentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EsupportsetlfrentesTable
     */
    public $Esupportsetlfrentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Esupportsetlfrentes',
        'app.Frentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Esupportsetlfrentes') ? [] : ['className' => EsupportsetlfrentesTable::class];
        $this->Esupportsetlfrentes = TableRegistry::getTableLocator()->get('Esupportsetlfrentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Esupportsetlfrentes);

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
