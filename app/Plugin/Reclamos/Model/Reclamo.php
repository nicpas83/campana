<?php

class Reclamo extends AppModel {

    public $label = 'Reclamos';
    public $tablePrefix = 'rec_';
    public $useTable = 'reclamos';
    public $plugin = 'Reclamos';
    

    public $hasMany = [
        'Relevamiento' => [
            'className' => 'Reclamos.Relevamiento',
            'foreignKey' => 'reclamo_id',
        ],
    ];
    

}
