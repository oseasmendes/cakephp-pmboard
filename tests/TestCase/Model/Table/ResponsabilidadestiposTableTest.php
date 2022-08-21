<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsabilidadestiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsabilidadestiposTable Test Case
 */
class ResponsabilidadestiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsabilidadestiposTable
     */
    public $Responsabilidadestipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Responsabilidadestipos',
        'app.Responsabilidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Responsabilidadestipos') ? [] : ['className' => ResponsabilidadestiposTable::class];
        $this->Responsabilidadestipos = TableRegistry::getTableLocator()->get('Responsabilidadestipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Responsabilidadestipos);

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
