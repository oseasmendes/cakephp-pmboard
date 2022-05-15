<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemaprostepsimgsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemaprostepsimgsTable Test Case
 */
class SistemaprostepsimgsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemaprostepsimgsTable
     */
    public $Sistemaprostepsimgs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemaprostepsimgs',
        'app.Sistemaprosteps'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemaprostepsimgs') ? [] : ['className' => SistemaprostepsimgsTable::class];
        $this->Sistemaprostepsimgs = TableRegistry::getTableLocator()->get('Sistemaprostepsimgs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemaprostepsimgs);

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
