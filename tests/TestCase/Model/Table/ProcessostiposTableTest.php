<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProcessostiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProcessostiposTable Test Case
 */
class ProcessostiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProcessostiposTable
     */
    public $Processostipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Processostipos',
        'app.Processos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Processostipos') ? [] : ['className' => ProcessostiposTable::class];
        $this->Processostipos = TableRegistry::getTableLocator()->get('Processostipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Processostipos);

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
