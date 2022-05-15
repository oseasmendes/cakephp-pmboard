<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CalendariosplanosFixture
 */
class CalendariosplanosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'descricao' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'calendariostipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'horainicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'horafim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'horaalmocoinicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'horaalmocofim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'primeiraparadainicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'primeiraparadafim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'segundaparadainicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'segundaparadafim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'terceiraparadainicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'terceiraparadafim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'quartaparadainicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'quartaparadafim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tempoabertura' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'tempoparadaprogramada' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'tempodisponivel' => ['type' => 'decimal', 'length' => 18, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'considerarcrossday' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'empresa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tempoprimeiraparada' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'temposegundaparada' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tempoterceiraparada' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tempoquartaparada' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tempoalmocoparada' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
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
                'descricao' => 'Lorem ipsum dolor sit amet',
                'calendariostipo_id' => 1,
                'horainicio' => '2020-04-27 11:48:48',
                'horafim' => '2020-04-27 11:48:48',
                'horaalmocoinicio' => '2020-04-27 11:48:48',
                'horaalmocofim' => '2020-04-27 11:48:48',
                'primeiraparadainicio' => '2020-04-27 11:48:48',
                'primeiraparadafim' => '2020-04-27 11:48:48',
                'segundaparadainicio' => '2020-04-27 11:48:48',
                'segundaparadafim' => '2020-04-27 11:48:48',
                'terceiraparadainicio' => '2020-04-27 11:48:48',
                'terceiraparadafim' => '2020-04-27 11:48:48',
                'quartaparadainicio' => '2020-04-27 11:48:48',
                'quartaparadafim' => '2020-04-27 11:48:48',
                'tempoabertura' => 1.5,
                'tempoparadaprogramada' => 1.5,
                'tempodisponivel' => 1.5,
                'considerarcrossday' => 1,
                'created' => '2020-04-27 11:48:48',
                'modified' => '2020-04-27 11:48:48',
                'empresa_id' => 1,
                'tempoprimeiraparada' => 'Lorem ipsum dolor sit amet',
                'temposegundaparada' => 'Lorem ipsum dolor sit amet',
                'tempoterceiraparada' => 'Lorem ipsum dolor sit amet',
                'tempoquartaparada' => 'Lorem ipsum dolor sit amet',
                'tempoalmocoparada' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
