<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supply Model
 *
 * @property \App\Model\Table\ProductTable&\Cake\ORM\Association\BelongsToMany $Product
 *
 * @method \App\Model\Entity\Supply newEmptyEntity()
 * @method \App\Model\Entity\Supply newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Supply[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supply get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supply findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Supply patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supply[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supply|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supply saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supply[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supply[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supply[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supply[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SupplyTable extends Table
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

        $this->setTable('supply');
        $this->setDisplayField('supply_id');
        $this->setPrimaryKey('supply_id');

        $this->belongsToMany('Product', [
            'foreignKey' => 'supply_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'product_supply',
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
            ->nonNegativeInteger('supply_id')
            ->allowEmptyString('supply_id', null, 'create');

        $validator
            ->scalar('name_supply')
            ->maxLength('name_supply', 50)
            ->requirePresence('name_supply', 'create')
            ->notEmptyString('name_supply');

        $validator
            ->integer('quantity_supply')
            ->requirePresence('quantity_supply', 'create')
            ->notEmptyString('quantity_supply');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('supply_expenditure')
            ->maxLength('supply_expenditure', 100)
            ->requirePresence('supply_expenditure', 'create')
            ->notEmptyString('supply_expenditure');

        return $validator;
    }
}
