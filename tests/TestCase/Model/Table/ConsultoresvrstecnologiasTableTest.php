<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoresvrstecnologiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoresvrstecnologiasTable Test Case
 */
class ConsultoresvrstecnologiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoresvrstecnologiasTable
     */
    public $Consultoresvrstecnologias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultoresvrstecnologias',
        'app.Consultores',
        'app.Tecnologias',
        'app.Knowhows'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultoresvrstecnologias') ? [] : ['className' => ConsultoresvrstecnologiasTable::class];
        $this->Consultoresvrstecnologias = TableRegistry::getTableLocator()->get('Consultoresvrstecnologias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultoresvrstecnologias);

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
