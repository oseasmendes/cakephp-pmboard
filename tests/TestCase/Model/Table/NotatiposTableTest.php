<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotatiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotatiposTable Test Case
 */
class NotatiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotatiposTable
     */
    public $Notatipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Notatipos',
        'app.Projetosprodutosnotas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Notatipos') ? [] : ['className' => NotatiposTable::class];
        $this->Notatipos = TableRegistry::getTableLocator()->get('Notatipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Notatipos);

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
