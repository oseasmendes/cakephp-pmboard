<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeedbacktiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeedbacktiposTable Test Case
 */
class FeedbacktiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FeedbacktiposTable
     */
    public $Feedbacktipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Feedbacktipos',
        'app.Projetosprodutosfeedbacks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Feedbacktipos') ? [] : ['className' => FeedbacktiposTable::class];
        $this->Feedbacktipos = TableRegistry::getTableLocator()->get('Feedbacktipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Feedbacktipos);

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
