<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtadetalhedatasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtadetalhedatasTable Test Case
 */
class AtadetalhedatasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtadetalhedatasTable
     */
    public $Atadetalhedatas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Atadetalhedatas',
        'app.Atadetalhes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Atadetalhedatas') ? [] : ['className' => AtadetalhedatasTable::class];
        $this->Atadetalhedatas = TableRegistry::getTableLocator()->get('Atadetalhedatas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atadetalhedatas);

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
