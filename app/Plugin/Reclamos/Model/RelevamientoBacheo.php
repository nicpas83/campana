<?php

class RelevamientoBacheo extends AppModel {

    public $label = 'Relevamientos';
    public $tablePrefix = 'rec_';
    public $useTable = 'relevamientos_bacheo';
    public $plugin = 'Reclamos';
    public $belongsTo = [
        'Reclamo' => [
            'className' => 'Reclamos.Reclamo',
            'foreignKey' => 'reclamo_id',
        ],
    ];
    

}
