<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customer Model
 *
 * @property \App\Model\Table\OrderDetailsTable&\Cake\ORM\Association\HasMany $OrderDetails
 *
 * @method \App\Model\Entity\Customer newEmptyEntity()
 * @method \App\Model\Entity\Customer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CustomerTable extends Table
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

        $this->setTable('customer');
        $this->setDisplayField('customer_Id');
        $this->setPrimaryKey('customer_Id');

        $this->hasMany('OrderDetails', [
            'foreignKey' => 'customer_id',
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
            ->nonNegativeInteger('customer_Id')
            ->allowEmptyString('customer_Id', null, 'create');

        $validator
            ->scalar('Full_Name')
            ->maxLength('Full_Name', 50)
            ->requirePresence('Full_Name', 'create')
            ->notEmptyString('Full_Name');

        $validator
            ->scalar('Username')
            ->maxLength('Username', 30)
            ->requirePresence('Username', 'create')
            ->notEmptyString('Username');

        $validator
            ->scalar('Password')
            ->maxLength('Password', 30)
            ->requirePresence('Password', 'create')
            ->notEmptyString('Password');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 255)
            ->requirePresence('Email', 'create')
            ->notEmptyString('Email');

        $validator
            ->integer('Phone_No')
            ->requirePresence('Phone_No', 'create')
            ->notEmptyString('Phone_No');

        $validator
            ->scalar('Address')
            ->maxLength('Address', 300)
            ->requirePresence('Address', 'create')
            ->notEmptyString('Address');

        $validator
            ->date('Birthday')
            ->requirePresence('Birthday', 'create')
            ->notEmptyDate('Birthday');

        $validator
            ->scalar('Membership')
            ->maxLength('Membership', 10)
            ->allowEmptyString('Membership');

        return $validator;
    }
}
