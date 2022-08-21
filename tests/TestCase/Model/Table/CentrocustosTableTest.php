<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CentrocustosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CentrocustosTable Test Case
 */
class CentrocustosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CentrocustosTable
     */
    public $Centrocustos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Centrocustos',
        'app.Propostas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Centrocustos') ? [] : ['className' => CentrocustosTable::class];
        $this->Centrocustos = TableRegistry::getTableLocator()->get('Centrocustos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Centrocustos);

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
