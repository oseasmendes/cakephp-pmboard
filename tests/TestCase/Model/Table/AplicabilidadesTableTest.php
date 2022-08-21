<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AplicabilidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AplicabilidadesTable Test Case
 */
class AplicabilidadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AplicabilidadesTable
     */
    public $Aplicabilidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Aplicabilidades',
        'app.Sistemasriscos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Aplicabilidades') ? [] : ['className' => AplicabilidadesTable::class];
        $this->Aplicabilidades = TableRegistry::getTableLocator()->get('Aplicabilidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aplicabilidades);

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
