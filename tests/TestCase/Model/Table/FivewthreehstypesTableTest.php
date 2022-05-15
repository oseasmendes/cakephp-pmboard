<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FivewthreehstypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FivewthreehstypesTable Test Case
 */
class FivewthreehstypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FivewthreehstypesTable
     */
    public $Fivewthreehstypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fivewthreehstypes',
        'app.Fivewthreehs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fivewthreehstypes') ? [] : ['className' => FivewthreehstypesTable::class];
        $this->Fivewthreehstypes = TableRegistry::getTableLocator()->get('Fivewthreehstypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fivewthreehstypes);

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
