<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosentregasreqsrefsimgsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosentregasreqsrefsimgsTable Test Case
 */
class ProjetosentregasreqsrefsimgsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosentregasreqsrefsimgsTable
     */
    public $Projetosentregasreqsrefsimgs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosentregasreqsrefsimgs',
        'app.Projetosentregasreqsreves',
        'app.Imagestipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosentregasreqsrefsimgs') ? [] : ['className' => ProjetosentregasreqsrefsimgsTable::class];
        $this->Projetosentregasreqsrefsimgs = TableRegistry::getTableLocator()->get('Projetosentregasreqsrefsimgs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosentregasreqsrefsimgs);

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
