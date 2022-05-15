<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AproachesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AproachesTable Test Case
 */
class AproachesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AproachesTable
     */
    public $Aproaches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Aproaches',
        'app.Projetoslearnedlessons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Aproaches') ? [] : ['className' => AproachesTable::class];
        $this->Aproaches = TableRegistry::getTableLocator()->get('Aproaches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aproaches);

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
