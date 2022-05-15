<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariostiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariostiposTable Test Case
 */
class UsuariostiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariostiposTable
     */
    public $Usuariostipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Usuariostipos',
        'app.Sistemasusuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Usuariostipos') ? [] : ['className' => UsuariostiposTable::class];
        $this->Usuariostipos = TableRegistry::getTableLocator()->get('Usuariostipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usuariostipos);

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
