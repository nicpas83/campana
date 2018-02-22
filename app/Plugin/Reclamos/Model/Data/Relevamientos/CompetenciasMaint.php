<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class CompetenciasMaint extends AbstractData {

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
                    'name' => 'competencia',
                    'label' => 'Competencia',
                ),
            ),
            'title' => 'Datos de la Empresa',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'table',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'trabajo_tipo',
                    'label' => 'Trabajo Tipo',
                    'presentation' => 'RECLAMOS::TRABAJOS_OPERATIVAS',
                ),
                1 => 
                array (
                    'name' => 'precio',
                    'label' => 'Precio',
                ),
            ),
            'paginate' => true,
            'title' => 'Prestaciones',
            'model' => 'Prestacion',
            'plugin' => 'Reclamos',
        ),
    ),
);

}
