<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParetosmestresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParetosmestresTable Test Case
 */
class ParetosmestresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParetosmestresTable
     */
    public $Paretosmestres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Paretosmestres',
        'app.Paretos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Paretosmestres') ? [] : ['className' => ParetosmestresTable::class];
        $this->Paretosmestres = TableRegistry::getTableLocator()->get('Paretosmestres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paretosmestres);

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
