<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipodocumentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipodocumentosTable Test Case
 */
class TipodocumentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipodocumentosTable
     */
    public $Tipodocumentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tipodocumentos',
        'app.Atas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tipodocumentos') ? [] : ['className' => TipodocumentosTable::class];
        $this->Tipodocumentos = TableRegistry::getTableLocator()->get('Tipodocumentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipodocumentos);

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
