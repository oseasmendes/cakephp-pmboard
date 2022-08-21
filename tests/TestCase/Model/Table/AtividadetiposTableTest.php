<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtividadetiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtividadetiposTable Test Case
 */
class AtividadetiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtividadetiposTable
     */
    public $Atividadetipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atividadetipos',
        'app.Agendas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atividadetipos') ? [] : ['className' => AtividadetiposTable::class];
        $this->Atividadetipos = TableRegistry::getTableLocator()->get('Atividadetipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atividadetipos);

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
