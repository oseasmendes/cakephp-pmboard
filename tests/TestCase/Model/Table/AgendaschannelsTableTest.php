<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgendaschannelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgendaschannelsTable Test Case
 */
class AgendaschannelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgendaschannelsTable
     */
    public $Agendaschannels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Agendaschannels',
        'app.Agendasnotes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Agendaschannels') ? [] : ['className' => AgendaschannelsTable::class];
        $this->Agendaschannels = TableRegistry::getTableLocator()->get('Agendaschannels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agendaschannels);

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
