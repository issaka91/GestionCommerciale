<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Marques Model
 *
 * @property \Cake\ORM\Association\HasMany $Produits
 *
 * @method \App\Model\Entity\Marque get($primaryKey, $options = [])
 * @method \App\Model\Entity\Marque newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Marque[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Marque|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Marque patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Marque[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Marque findOrCreate($search, callable $callback = null)
 */
class MarquesTable extends Table
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

        $this->table('marques');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Produits', [
            'foreignKey' => 'marque_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('LibMarque');

        return $validator;
    }
}
