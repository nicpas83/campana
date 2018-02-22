<?php

class Competencia extends AppModel {

    public $label = 'Competencias';
    public $tablePrefix = 'rec_';
    public $useTable = 'competencias';
    public $plugin = 'Reclamos';
    

    public $hasMany = [
        'Prestacion' => [
            'className' => 'Reclamos.Prestacion',
            'foreignKey' => 'competenci_id',
        ],
    ];
    

}
