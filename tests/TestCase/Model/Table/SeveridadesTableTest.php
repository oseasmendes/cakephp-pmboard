<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeveridadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeveridadesTable Test Case
 */
class SeveridadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SeveridadesTable
     */
    public $Severidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Severidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Severidades') ? [] : ['className' => SeveridadesTable::class];
        $this->Severidades = TableRegistry::getTableLocator()->get('Severidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Severidades);

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
