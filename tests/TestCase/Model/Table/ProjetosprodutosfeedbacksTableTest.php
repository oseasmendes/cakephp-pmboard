<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetosprodutosfeedbacksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetosprodutosfeedbacksTable Test Case
 */
class ProjetosprodutosfeedbacksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetosprodutosfeedbacksTable
     */
    public $Projetosprodutosfeedbacks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projetosprodutosfeedbacks',
        'app.Feedbacktipos',
        'app.Projetosprodutos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projetosprodutosfeedbacks') ? [] : ['className' => ProjetosprodutosfeedbacksTable::class];
        $this->Projetosprodutosfeedbacks = TableRegistry::getTableLocator()->get('Projetosprodutosfeedbacks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projetosprodutosfeedbacks);

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
