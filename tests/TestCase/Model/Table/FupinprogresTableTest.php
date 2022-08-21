<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FupinprogresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FupinprogresTable Test Case
 */
class FupinprogresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FupinprogresTable
     */
    public $Fupinprogres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fupinprogres',
        'app.Fupagendas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fupinprogres') ? [] : ['className' => FupinprogresTable::class];
        $this->Fupinprogres = TableRegistry::getTableLocator()->get('Fupinprogres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fupinprogres);

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
