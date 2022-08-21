<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoresausenciastiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoresausenciastiposTable Test Case
 */
class ConsultoresausenciastiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoresausenciastiposTable
     */
    public $Consultoresausenciastipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultoresausenciastipos',
        'app.Consultoresausencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultoresausenciastipos') ? [] : ['className' => ConsultoresausenciastiposTable::class];
        $this->Consultoresausenciastipos = TableRegistry::getTableLocator()->get('Consultoresausenciastipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultoresausenciastipos);

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
