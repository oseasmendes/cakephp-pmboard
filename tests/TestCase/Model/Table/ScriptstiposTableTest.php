<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScriptstiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScriptstiposTable Test Case
 */
class ScriptstiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ScriptstiposTable
     */
    public $Scriptstipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Scriptstipos',
        'app.Sistemascfgscripts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Scriptstipos') ? [] : ['className' => ScriptstiposTable::class];
        $this->Scriptstipos = TableRegistry::getTableLocator()->get('Scriptstipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Scriptstipos);

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
