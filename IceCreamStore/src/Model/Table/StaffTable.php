<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staff Model
 *
 * @property \App\Model\Table\StaffTable&\Cake\ORM\Association\BelongsTo $Staff
 *
 * @method \App\Model\Entity\Staff newEmptyEntity()
 * @method \App\Model\Entity\Staff newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Staff get($primaryKey, $options = [])
 * @method \App\Model\Entity\Staff findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Staff patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Staff|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StaffTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('staff');
        $this->setDisplayField('staff_id');
        $this->setPrimaryKey('staff_id');

        $this->belongsTo('Staff', [
            'foreignKey' => 'backup_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('staff_id')
            ->allowEmptyString('staff_id', null, 'create');

        $validator
            ->scalar('staff_name')
            ->maxLength('staff_name', 50)
            ->requirePresence('staff_name', 'create')
            ->notEmptyString('staff_name');

        $validator
            ->scalar('staff_username')
            ->maxLength('staff_username', 30)
            ->requirePresence('staff_username', 'create')
            ->notEmptyString('staff_username');

        $validator
            ->scalar('staff_password')
            ->maxLength('staff_password', 30)
            ->requirePresence('staff_password', 'create')
            ->notEmptyString('staff_password');

        $validator
            ->scalar('staff_email')
            ->maxLength('staff_email', 255)
            ->requirePresence('staff_email', 'create')
            ->notEmptyString('staff_email');

        $validator
            ->integer('staff_phone_no')
            ->requirePresence('staff_phone_no', 'create')
            ->notEmptyString('staff_phone_no');

        $validator
            ->scalar('staff_address')
            ->maxLength('staff_address', 300)
            ->requirePresence('staff_address', 'create')
            ->notEmptyString('staff_address');

        $validator
            ->scalar('role')
            ->maxLength('role', 20)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['backup_id'], 'Staff'));

        return $rules;
    }
}
