<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompetenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompetenciasTable Test Case
 */
class CompetenciasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompetenciasTable
     */
    public $Competencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Competencias',
        'app.Projetosalocacoespapeis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Competencias') ? [] : ['className' => CompetenciasTable::class];
        $this->Competencias = TableRegistry::getTableLocator()->get('Competencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Competencias);

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
