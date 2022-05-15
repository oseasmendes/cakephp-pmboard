<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OcorrenciastiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OcorrenciastiposTable Test Case
 */
class OcorrenciastiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OcorrenciastiposTable
     */
    public $Ocorrenciastipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ocorrenciastipos',
        'app.Ocorrencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ocorrenciastipos') ? [] : ['className' => OcorrenciastiposTable::class];
        $this->Ocorrenciastipos = TableRegistry::getTableLocator()->get('Ocorrenciastipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ocorrenciastipos);

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
