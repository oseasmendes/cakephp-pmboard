<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FupqueuesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FupqueuesTable Test Case
 */
class FupqueuesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FupqueuesTable
     */
    public $Fupqueues;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fupqueues',
        'app.Fupagendas',
        'app.Fupqueuesdistributions',
        'app.Projetosprodutos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fupqueues') ? [] : ['className' => FupqueuesTable::class];
        $this->Fupqueues = TableRegistry::getTableLocator()->get('Fupqueues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fupqueues);

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
