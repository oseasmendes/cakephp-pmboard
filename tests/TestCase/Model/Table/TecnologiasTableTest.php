<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TecnologiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TecnologiasTable Test Case
 */
class TecnologiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TecnologiasTable
     */
    public $Tecnologias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tecnologias',
        'app.Consultoresvrstecnologias',
        'app.Integrations',
        'app.ShApptechno',
        'app.Sistemascfgfronts',
        'app.Sistemascfgintegrations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tecnologias') ? [] : ['className' => TecnologiasTable::class];
        $this->Tecnologias = TableRegistry::getTableLocator()->get('Tecnologias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tecnologias);

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
