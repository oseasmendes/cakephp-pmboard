<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemaprostepsfilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemaprostepsfilesTable Test Case
 */
class SistemaprostepsfilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemaprostepsfilesTable
     */
    public $Sistemaprostepsfiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemaprostepsfiles',
        'app.Sistemaprosteps'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemaprostepsfiles') ? [] : ['className' => SistemaprostepsfilesTable::class];
        $this->Sistemaprostepsfiles = TableRegistry::getTableLocator()->get('Sistemaprostepsfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemaprostepsfiles);

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
