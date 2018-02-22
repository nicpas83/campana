<?php

class Reclamo extends AppModel {

    public $label = 'Reclamos';
    public $tablePrefix = 'rec_';
    public $useTable = 'reclamos';
    public $plugin = 'Reclamos';
    

    public $belongsTo = [
        'Prestacion' => [
            'className' => 'Reclamos.Prestacion',
            'foreignKey' => 'prestacion_id',
        ],
    ];
    

}
