<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetoscutoversflwsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetoscutoversflwsTable Test Case
 */
class ProjetoscutoversflwsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetoscutoversflwsTable
     */
    public $Projetoscutoversflws;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetoscutoversflws',
        'app.Projetoscutovers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetoscutoversflws') ? [] : ['className' => ProjetoscutoversflwsTable::class];
        $this->Projetoscutoversflws = TableRegistry::getTableLocator()->get('Projetoscutoversflws', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetoscutoversflws);

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
