<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoresnotasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoresnotasTable Test Case
 */
class ConsultoresnotasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoresnotasTable
     */
    public $Consultoresnotas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultoresnotas',
        'app.Consultores',
        'app.Ocorrencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultoresnotas') ? [] : ['className' => ConsultoresnotasTable::class];
        $this->Consultoresnotas = TableRegistry::getTableLocator()->get('Consultoresnotas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultoresnotas);

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
