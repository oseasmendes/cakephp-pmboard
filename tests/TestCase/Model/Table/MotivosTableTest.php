<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MotivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MotivosTable Test Case
 */
class MotivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MotivosTable
     */
    public $Motivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Motivos',
        'app.Projetosstatus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Motivos') ? [] : ['className' => MotivosTable::class];
        $this->Motivos = TableRegistry::getTableLocator()->get('Motivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Motivos);

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
