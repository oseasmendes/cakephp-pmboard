<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scriptstipos Model
 *
 * @property \App\Model\Table\SistemascfgscriptsTable|\Cake\ORM\Association\HasMany $Sistemascfgscripts
 *
 * @method \App\Model\Entity\Scriptstipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Scriptstipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Scriptstipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scriptstipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scriptstipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scriptstipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Scriptstipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scriptstipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ScriptstiposTable extends Table
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

        $this->setTable('scriptstipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sistemascfgscripts', [
            'foreignKey' => 'scriptstipo_id'
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

        return $validator;
    }
}
