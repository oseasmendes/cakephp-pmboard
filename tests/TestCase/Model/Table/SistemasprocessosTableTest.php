<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasprocessosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasprocessosTable Test Case
 */
class SistemasprocessosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasprocessosTable
     */
    public $Sistemasprocessos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sistemasprocessos',
        'app.Sistemas',
        'app.Processos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sistemasprocessos') ? [] : ['className' => SistemasprocessosTable::class];
        $this->Sistemasprocessos = TableRegistry::getTableLocator()->get('Sistemasprocessos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemasprocessos);

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
