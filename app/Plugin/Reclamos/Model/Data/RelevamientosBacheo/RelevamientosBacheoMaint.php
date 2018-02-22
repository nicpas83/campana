<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class RelevamientosBacheoMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'data' => 
    array (
        0 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'prestacion_id',
                    'label' => 'Tipo de Prestación',
                    'presentation' => 'AUTOCOMPLETE',
                    'classparams' => '{\'model\':\'Reclamos.Prestacion\',\'conditions\':{\'Prestacion.competencia\':\'BACHEO\'}}',
                ),
            ),
            'id' => 'inicio',
            'title' => 'Relevamientos Bacheo',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'reparacion_ancho',
                    'label' => 'Ancho',
                ),
                1 => 
                array (
                    'name' => 'reparacion_largo',
                    'label' => 'Largo',
                ),
                2 => 
                array (
                    'name' => 'reparacion_profundidad',
                    'label' => 'Profundidad',
                ),
            ),
            'id' => '5',
            'title' => 'Reparación Bache',
            'columns' => '2',
        ),
        2 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'problemas_ancho',
                    'label' => 'Ancho',
                ),
                1 => 
                array (
                    'name' => 'problemas_largo',
                    'label' => 'Largo',
                ),
                2 => 
                array (
                    'name' => 'problemas_profundidad',
                    'label' => 'Profundidad',
                ),
                3 => 
                array (
                    'name' => 'problemas_empresa',
                    'label' => 'Empresa',
                ),
            ),
            'id' => '6',
            'title' => 'Problemas',
            'columns' => '2',
        ),
    ),
);

}
