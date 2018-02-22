<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class RelevamientosSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => 'Relevamientos',
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'razon_social',
            'label' => 'Razón Social',
            'presentation' => 'SELECT',
            'classparams' => '{\'model\':\'Reclamos.Empresa\',\'field\':\'razon_social\'}',
        ),
        1 => 
        array (
            'name' => 'cuit',
            'label' => 'CUIT',
            'size' => 20,
            'note' => 'Sólo números',
        ),
        2 => 
        array (
            'name' => 'comuna',
            'label' => 'Comuna',
            'presentation' => 'GEOLOCALIZACION::COMUNAS',
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
                    'name' => 'prestacion_id',
                    'label' => 'Prestacion',
                    'presentation' => 'AUTOCOMPLETE',
                    'classparams' => '{\'model\':\'Reclamos.Prestacion\'}',
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
                    'name' => 'observaciones',
                    'label' => 'Observación',
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
    ),
);

}
