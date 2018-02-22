<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class PrestacionesMaint extends AbstractData {

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
                    'name' => 'prestacion',
                    'label' => 'Prestación',
                ),
                1 => 
                array (
                    'name' => 'competencia',
                    'label' => 'Competencia',
                    'presentation' => 'COMPETENCIA',
                ),
            ),
            'title' => 'Definir la Prestacion y su Competencia',
            'columns' => '2',
        ),
    ),
);

}
