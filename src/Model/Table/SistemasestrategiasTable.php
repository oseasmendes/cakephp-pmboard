<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasestrategias Model
 *
 * @property \App\Model\Table\EstrategiasTable|\Cake\ORM\Association\BelongsTo $Estrategias
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\HasMany $Sistemas
 *
 * @method \App\Model\Entity\Sistemasestrategia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasestrategia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasestrategia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasestrategia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasestrategia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasestrategia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasestrategia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasestrategia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasestrategiasTable extends Table
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

        $this->setTable('sistemasestrategias');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Estrategias', [
            'foreignKey' => 'estrategia_id'
        ]);
        $this->hasMany('Sistemas', [
            'foreignKey' => 'sistemasestrategia_id'
        ]);
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

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['estrategia_id'], 'Estrategias'));

        return $rules;
    }
}
