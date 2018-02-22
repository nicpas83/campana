<?php

class Prestacion extends AppModel {

    public $label = 'Prestacions';
    public $tablePrefix = 'rec_';
    public $useTable = 'prestaciones';
    public $plugin = 'Reclamos';
    

    public $hasMany = [
        'Reclamo' => [
            'className' => 'Reclamos.Reclamo',
            'foreignKey' => 'prestacion_id',
        ],
    ];
    

}
