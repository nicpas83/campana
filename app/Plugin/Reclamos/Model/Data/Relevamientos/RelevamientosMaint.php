<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class RelevamientosMaint extends AbstractData {

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
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Reclamos.Prestacion\',\'conditions\':{\'Prestacion.competencia\':[\'BACHEO\',\'LUMINARIAS\',\'ESCOMBROS\',\'BALDIOS\',\'ESPACIOS VERDES\',\'POSTES\']}}',
                ),
            ),
            'id' => 'inicio',
            'title' => 'Relevamientos',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'observaciones',
                    'label' => 'Observación',
                    'presentation' => 'TEXTAREA',
                ),
                1 => 
                array (
                    'name' => 'fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                ),
            ),
            'id' => 'inicio',
            'title' => 'Observaciones',
            'columns' => '2',
        ),
        2 => 
        array (
            'type' => 'files',
            'id' => 'archivos',
            'title' => 'Archivos',
        ),
    ),
);

}
