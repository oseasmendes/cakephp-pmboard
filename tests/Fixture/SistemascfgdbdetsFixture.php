<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SistemascfgdbdetsFixture
 */
class SistemascfgdbdetsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sistemascfgdb_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'datainventario' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tamanho' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'qtetabelas' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'qtecolunas' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'qteregistros' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'qtestoreprocedures' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'qtetriggers' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'espacoemdisco' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'responsavelinventario' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'sistemascfgdb_id' => 1,
                'datainventario' => '2019-04-15 19:12:51',
                'tamanho' => 1.5,
                'qtetabelas' => 1.5,
                'qtecolunas' => 1.5,
                'qteregistros' => 1.5,
                'qtestoreprocedures' => 1.5,
                'qtetriggers' => 1.5,
                'espacoemdisco' => 1.5,
                'responsavelinventario' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-04-15 19:12:51',
                'modified' => '2019-04-15 19:12:51'
            ],
        ];
        parent::init();
    }
}
