<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewProjetotimingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewProjetotimingsTable Test Case
 */
class ViewProjetotimingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewProjetotimingsTable
     */
    public $ViewProjetotimings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewProjetotimings',
        'app.Projetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewProjetotimings') ? [] : ['className' => ViewProjetotimingsTable::class];
        $this->ViewProjetotimings = TableRegistry::getTableLocator()->get('ViewProjetotimings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewProjetotimings);

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
