<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtaconsultoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtaconsultoresTable Test Case
 */
class AtaconsultoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtaconsultoresTable
     */
    public $Ataconsultores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ataconsultores',
        'app.Atas',
        'app.Consultores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ataconsultores') ? [] : ['className' => AtaconsultoresTable::class];
        $this->Ataconsultores = TableRegistry::getTableLocator()->get('Ataconsultores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ataconsultores);

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
