<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fupqueuesdistribution Entity
 *
 * @property int $id
 * @property int|null $fupqueue_id
 * @property int|null $participante_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Fupqueue $fupqueue
 * @property \App\Model\Entity\Participante $participante
 */
class Fupqueuesdistribution extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'fupqueue_id' => true,
        'participante_id' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'fupqueue' => true,
        'participante' => true
    ];
}
