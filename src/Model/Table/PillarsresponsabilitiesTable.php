<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pillarsresponsabilities Model
 *
 * @method \App\Model\Entity\Pillarsresponsability get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pillarsresponsability newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pillarsresponsability[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pillarsresponsability|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pillarsresponsability saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pillarsresponsability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pillarsresponsability[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pillarsresponsability findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PillarsresponsabilitiesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pillarsresponsabilities');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        return $validator;
    }
}
