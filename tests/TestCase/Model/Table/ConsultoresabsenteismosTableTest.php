<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoresabsenteismosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoresabsenteismosTable Test Case
 */
class ConsultoresabsenteismosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoresabsenteismosTable
     */
    public $Consultoresabsenteismos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultoresabsenteismos',
        'app.Consultores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultoresabsenteismos') ? [] : ['className' => ConsultoresabsenteismosTable::class];
        $this->Consultoresabsenteismos = TableRegistry::getTableLocator()->get('Consultoresabsenteismos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultoresabsenteismos);

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
