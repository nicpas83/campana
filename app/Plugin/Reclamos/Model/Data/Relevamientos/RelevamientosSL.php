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
            'name' => 'prestacion_id',
            'label' => 'Tipo de Prestación',
            'presentation' => 'SELECT',
            'classparams' => '{\'model\':\'Reclamos.Prestacion\',\'conditions\':{\'Prestacion.competencia\':[\'LUMINARIAS\',\'ESCOMBROS\',\'BALDIOS\',\'ESPACIOS VERDES\',\'POSTES\']}}',
        ),
        1 => 
        array (
            'name' => 'estado',
            'label' => 'Estado',
            'presentation' => 'ESTADOS_RECLAMOS',
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
                    'label' => 'Tipo de Prestación',
                    'presentation' => 'SELECT',
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
                    'name' => 'vecino',
                    'label' => 'Vecino',
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
                    'name' => 'vecino_telefono',
                    'label' => 'Teléfono',
                    'presentation' => 'INT',
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
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADOS_RECLAMOS',
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
                    'name' => 'fecha',
                    'label' => 'Fecha de Relevamiento',
                    'presentation' => 'DATE',
                ),
            ),
        ),
    ),
);

}
