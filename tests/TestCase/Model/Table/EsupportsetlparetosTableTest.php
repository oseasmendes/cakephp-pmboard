<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EsupportsetlparetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EsupportsetlparetosTable Test Case
 */
class EsupportsetlparetosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EsupportsetlparetosTable
     */
    public $Esupportsetlparetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Esupportsetlparetos',
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
        $config = TableRegistry::getTableLocator()->exists('Esupportsetlparetos') ? [] : ['className' => EsupportsetlparetosTable::class];
        $this->Esupportsetlparetos = TableRegistry::getTableLocator()->get('Esupportsetlparetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Esupportsetlparetos);

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
