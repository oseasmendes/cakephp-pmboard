<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvisotiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvisotiposTable Test Case
 */
class AvisotiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AvisotiposTable
     */
    public $Avisotipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Avisotipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Avisotipos') ? [] : ['className' => AvisotiposTable::class];
        $this->Avisotipos = TableRegistry::getTableLocator()->get('Avisotipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Avisotipos);

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
