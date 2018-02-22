<?php

class Prestacion extends AppModel {

    public $label = 'Prestacions';
    public $tablePrefix = 'rec_';
    public $useTable = 'prestaciones';
    public $plugin = 'Reclamos';
    
    public $virtualFields = array(
        'tmp_prestacion' => "CONCAT(competencia, ' - ', prestacion)",
    );
    
    public $displayField = "tmp_prestacion";
    

    public $hasMany = [
        'Reclamo' => [
            'className' => 'Reclamos.Reclamo',
            'foreignKey' => 'prestacion_id',
        ],
    ];
    

}
