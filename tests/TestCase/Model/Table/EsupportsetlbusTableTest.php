<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EsupportsetlbusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EsupportsetlbusTable Test Case
 */
class EsupportsetlbusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EsupportsetlbusTable
     */
    public $Esupportsetlbus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Esupportsetlbus',
        'app.Empresasunidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Esupportsetlbus') ? [] : ['className' => EsupportsetlbusTable::class];
        $this->Esupportsetlbus = TableRegistry::getTableLocator()->get('Esupportsetlbus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Esupportsetlbus);

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
