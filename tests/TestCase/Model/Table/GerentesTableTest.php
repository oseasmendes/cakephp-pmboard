<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GerentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GerentesTable Test Case
 */
class GerentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GerentesTable
     */
    public $Gerentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Gerentes',
        'app.Departamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Gerentes') ? [] : ['className' => GerentesTable::class];
        $this->Gerentes = TableRegistry::getTableLocator()->get('Gerentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gerentes);

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
