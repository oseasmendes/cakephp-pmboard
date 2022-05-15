<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EsupportsetlsistemasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EsupportsetlsistemasTable Test Case
 */
class EsupportsetlsistemasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EsupportsetlsistemasTable
     */
    public $Esupportsetlsistemas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Esupportsetlsistemas',
        'app.Sistemas',
        'app.Sistemasmodulos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Esupportsetlsistemas') ? [] : ['className' => EsupportsetlsistemasTable::class];
        $this->Esupportsetlsistemas = TableRegistry::getTableLocator()->get('Esupportsetlsistemas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Esupportsetlsistemas);

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
