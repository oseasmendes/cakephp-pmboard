<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProbabilidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProbabilidadesTable Test Case
 */
class ProbabilidadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProbabilidadesTable
     */
    public $Probabilidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Probabilidades',
        'app.Projetosprodutosriscos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Probabilidades') ? [] : ['className' => ProbabilidadesTable::class];
        $this->Probabilidades = TableRegistry::getTableLocator()->get('Probabilidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Probabilidades);

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
