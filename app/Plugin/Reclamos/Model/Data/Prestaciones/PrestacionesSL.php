<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class PrestacionesSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => 'Prestaciones',
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'competencia',
            'label' => 'Competencia',
            'presentation' => 'SELECT_FIELD',
            'classparams' => '{\'model\':\'Reclamos.Prestacion\',\'field\':\'competencia\'}',
        ),
    ),
    'columns' => 
    array (
        0 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'prestacion',
                    'label' => 'Prestacion',
                ),
            ),
        ),
        1 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'competencia',
                    'label' => 'Competencia',
                ),
            ),
        ),
    ),
);

}
