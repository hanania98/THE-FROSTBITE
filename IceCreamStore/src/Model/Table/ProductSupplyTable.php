<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductSupply Model
 *
 * @property \App\Model\Table\ProductTable&\Cake\ORM\Association\BelongsTo $Product
 * @property \App\Model\Table\SupplyTable&\Cake\ORM\Association\BelongsTo $Supply
 *
 * @method \App\Model\Entity\ProductSupply newEmptyEntity()
 * @method \App\Model\Entity\ProductSupply newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductSupply[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductSupply get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductSupply findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductSupply patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductSupply[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductSupply|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductSupply saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductSupply[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductSupply[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductSupply[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductSupply[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductSupplyTable extends Table
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

        $this->setTable('product_supply');
        $this->setDisplayField('product_supply_id');
        $this->setPrimaryKey('product_supply_id');

        $this->belongsTo('Product', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Supply', [
            'foreignKey' => 'supply_id',
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
            ->nonNegativeInteger('product_supply_id')
            ->allowEmptyString('product_supply_id', null, 'create');

        $validator
            ->scalar('product_supply_name')
            ->maxLength('product_supply_name', 50)
            ->requirePresence('product_supply_name', 'create')
            ->notEmptyString('product_supply_name');

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
        $rules->add($rules->existsIn(['product_id'], 'Product'));
        $rules->add($rules->existsIn(['supply_id'], 'Supply'));

        return $rules;
    }
}
