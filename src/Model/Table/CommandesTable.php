<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commandes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Fournisseurs
 *
 * @method \App\Model\Entity\Commande get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commande newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Commande[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commande|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commande patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commande[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commande findOrCreate($search, callable $callback = null)
 */
class CommandesTable extends Table
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

        $this->table('commandes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Fournisseurs', [
            'foreignKey' => 'fournisseur_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('id', 'create');

        $validator
            ->date('DateCmd')
            ->allowEmpty('DateCmd');

        $validator
            ->date('delaiLiv')
            ->requirePresence('delaiLiv', 'create')
            ->notEmpty('delaiLiv');

        $validator
            ->requirePresence('etatCmd', 'create')
            ->notEmpty('etatCmd');

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
        $rules->add($rules->existsIn(['fournisseur_id'], 'Fournisseurs'));

        return $rules;
    }
}
