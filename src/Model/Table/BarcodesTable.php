<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Barcodes Model
 *
 * @method \App\Model\Entity\Barcode get($primaryKey, $options = [])
 * @method \App\Model\Entity\Barcode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Barcode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Barcode|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Barcode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Barcode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Barcode findOrCreate($search, callable $callback = null, $options = [])
 */
class BarcodesTable extends Table
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

        $this->table('barcodes');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('number');

        $validator
            ->requirePresence('item', 'create')
            ->notEmpty('item');

        $validator
            ->requirePresence('ingredient', 'create')
            ->notEmpty('ingredient');

        $validator
            ->requirePresence('diet', 'create')
            ->notEmpty('diet');

        return $validator;
    }
}
