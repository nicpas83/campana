<?php

class RelevamientoArbolado extends AppModel {

    public $label = 'Relevamientos';
    public $tablePrefix = 'rec_';
    public $useTable = 'relevamientos_arbolado';
    public $plugin = 'Reclamos';
    public $belongsTo = [
        'Reclamo' => [
            'className' => 'Reclamos.Reclamo',
            'foreignKey' => 'reclamo_id',
        ],
    ];
    

}
