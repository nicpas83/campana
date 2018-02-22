<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class ReclamosSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => '',
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'prestacion',
            'label' => 'Prestación',
            'presentation' => 'AUTOCOMPLETE',
            'classparams' => '{\'model\':\'Reclamos.Prestacion\'}',
        ),
        1 => 
        array (
            'name' => 'fecha_carga',
            'label' => 'Fecha',
            'presentation' => 'DATERANGE',
        ),
        2 => 
        array (
            'name' => 'vecino',
            'label' => 'Vecino',
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
                    'name' => 'Prestacion.competencia',
                    'label' => 'Competencia',
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
                    'name' => 'Prestacion.prestacion',
                    'label' => 'Prestacion',
                ),
            ),
        ),
        2 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                ),
            ),
        ),
        3 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'direccion',
                    'label' => 'Dirección',
                ),
            ),
        ),
        4 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'comentario',
                    'label' => 'Comentario',
                ),
            ),
        ),
        5 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'vecino',
                    'label' => 'Vecino',
                ),
            ),
        ),
        6 => 
        array (
            'label' => '',
            'sortfield' => '',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                ),
            ),
        ),
    ),
    'order' => 
    array (
        'fecha_carga' => 'DESC',
    ),
);

}
