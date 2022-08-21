<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ViewProjetotimingsFixture
 */
class ViewProjetotimingsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'projeto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descricao' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'datainicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'datafim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tmpdisponiveldadata' => ['type' => 'decimal', 'length' => 40, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'tmpdisponiveldehoje' => ['type' => 'decimal', 'length' => 40, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'tmpaberturadadata' => ['type' => 'decimal', 'length' => 40, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'tmpaberturaddehoje' => ['type' => 'decimal', 'length' => 40, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'totaldediasuteisdadata' => ['type' => 'biginteger', 'length' => 21, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'totaldediasuteisdehoje' => ['type' => 'biginteger', 'length' => 21, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_options' => [
            'engine' => null,
            'collation' => null
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
                'projeto_id' => 1,
                'descricao' => 'Lorem ipsum dolor sit amet',
                'datainicio' => '2019-04-25 17:41:42',
                'datafim' => '2019-04-25 17:41:42',
                'created' => '2019-04-25 17:41:42',
                'modified' => '2019-04-25 17:41:42',
                'tmpdisponiveldadata' => 1.5,
                'tmpdisponiveldehoje' => 1.5,
                'tmpaberturadadata' => 1.5,
                'tmpaberturaddehoje' => 1.5,
                'totaldediasuteisdadata' => 1,
                'totaldediasuteisdehoje' => 1
            ],
        ];
        parent::init();
    }
}
