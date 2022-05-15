<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropostasalocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropostasalocsTable Test Case
 */
class PropostasalocsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PropostasalocsTable
     */
    public $Propostasalocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Propostasalocs',
        'app.Propostas',
        'app.Competencias',
        'app.Periodotipos',
        'app.Propostasalocsagendas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Propostasalocs') ? [] : ['className' => PropostasalocsTable::class];
        $this->Propostasalocs = TableRegistry::getTableLocator()->get('Propostasalocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Propostasalocs);

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
