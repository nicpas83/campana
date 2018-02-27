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
    
    public $hasMany = [
        'File' => array(
            'className' => 'FmwSystem.File',
            'conditions' => array('File.model' => 'Reclamos.Relevamiento'),
            'foreignKey' => 'model_id',
            'dependent' => true,
        ),
    ];

}
