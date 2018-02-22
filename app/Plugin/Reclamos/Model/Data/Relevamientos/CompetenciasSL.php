<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class CompetenciasSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => 'Competencias',
    'filters' => 
    array (
        0 => 
        array (
            'name' => 'razon_social',
            'label' => 'Razón Social',
            'presentation' => 'SELECT_FIELD',
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
        3 => 
        array (
            'name' => 'EmpresaPrecio.trabajo_tipo',
            'label' => 'Trabajo Tipo',
            'presentation' => 'RECLAMOS::TRABAJOS_OPERATIVAS',
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
                    'name' => 'razon_social',
                    'label' => 'Razón Social',
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
                    'name' => 'cuit',
                    'label' => 'CUIT',
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
                    'name' => 'comuna',
                    'label' => 'Comuna',
                    'presentation' => 'CHECKBOX',
                    'classparams' => '{\'options\':{\'1\':\'Comuna 1\',\'2\':\'Comuna 2\',\'3\':\'Comuna 3\',\'4\':\'Comuna 4\',\'5\':\'Comuna 5\',\'6\':\'Comuna 6\',\'7\':\'Comuna 7\',\'8\':\'Comuna 8\',\'9\':\'Comuna 9\',\'10\':\'Comuna 10\',\'11\':\'Comuna 11\',\'12\':\'Comuna 12\',\'13\':\'Comuna 13\',\'14\':\'Comuna 14\',\'15\':\'Comuna 15\'}}',
                ),
            ),
        ),
    ),
);

}
