<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoalocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoalocsTable Test Case
 */
class TipoalocsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoalocsTable
     */
    public $Tipoalocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tipoalocs',
        'app.Projetosalocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tipoalocs') ? [] : ['className' => TipoalocsTable::class];
        $this->Tipoalocs = TableRegistry::getTableLocator()->get('Tipoalocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipoalocs);

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
