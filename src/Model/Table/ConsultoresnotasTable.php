<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultoresnotas Model
 *
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\OcorrenciasTable|\Cake\ORM\Association\BelongsTo $Ocorrencias
 *
 * @method \App\Model\Entity\Consultoresnota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultoresnota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consultoresnota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresnota|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoresnota saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoresnota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresnota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresnota findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConsultoresnotasTable extends Table
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

        $this->setTable('consultoresnotas');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Ocorrencias', [
            'foreignKey' => 'ocorrencia_id'
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
            ->scalar('ocorrenciaresumo')
            ->maxLength('ocorrenciaresumo', 255)
            ->allowEmptyString('ocorrenciaresumo');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['ocorrencia_id'], 'Ocorrencias'));

        return $rules;
    }
}
