<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoresferiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoresferiasTable Test Case
 */
class ConsultoresferiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoresferiasTable
     */
    public $Consultoresferias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultoresferias',
        'app.Consultores',
        'app.Statusfuncionals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultoresferias') ? [] : ['className' => ConsultoresferiasTable::class];
        $this->Consultoresferias = TableRegistry::getTableLocator()->get('Consultoresferias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultoresferias);

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
