<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MotivostiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MotivostiposTable Test Case
 */
class MotivostiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MotivostiposTable
     */
    public $Motivostipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Motivostipos',
        'app.Motivos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Motivostipos') ? [] : ['className' => MotivostiposTable::class];
        $this->Motivostipos = TableRegistry::getTableLocator()->get('Motivostipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Motivostipos);

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
