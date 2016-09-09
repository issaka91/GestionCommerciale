<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FournisseursFixture
 *
 */
class FournisseursFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Nif' => ['type' => 'string', 'length' => 254, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nomFss' => ['type' => 'string', 'length' => 254, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'AdresseFss' => ['type' => 'string', 'length' => 254, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TelFss' => ['type' => 'string', 'length' => 254, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'VilleFss' => ['type' => 'string', 'length' => 254, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PaysFss' => ['type' => 'string', 'length' => 254, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'Nif' => 'Lorem ipsum dolor sit amet',
            'nomFss' => 'Lorem ipsum dolor sit amet',
            'AdresseFss' => 'Lorem ipsum dolor sit amet',
            'TelFss' => 'Lorem ipsum dolor sit amet',
            'VilleFss' => 'Lorem ipsum dolor sit amet',
            'PaysFss' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
