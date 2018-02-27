<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class ReclamosSL extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'title' => '',
    'actions' => 
    array (
        0 => 
        array (
            'op' => 'A',
            'action' => 'add',
            'label' => 'Nuevo Reclamo',
            'global' => 'true',
        ),
        1 => 
        array (
            'op' => 'V',
            'action' => 'view',
        ),
        2 => 
        array (
            'op' => 'E',
            'action' => 'edit',
        ),
        3 => 
        array (
            'op' => 'D',
            'action' => 'delete',
            'post' => '¿Está seguro que desea eliminar la solicitud?',
        ),
        4 => 
        array (
            'op' => 'E',
            'action' => 'relevar_arbolado',
            'icon' => 'tree',
            'label' => 'Relevar Arbolado',
            'displayFunction' => 'esArbolado',
        ),
        5 => 
        array (
            'op' => 'E',
            'action' => 'relevar_bacheo',
            'icon' => 'car',
            'label' => 'Relevar Bacheo',
            'displayFunction' => 'esBacheo',
        ),
        6 => 
        array (
            'op' => 'E',
            'action' => 'relevar_otro',
            'icon' => 'edit',
            'label' => 'Otros Relevamientos',
            'displayFunction' => 'esOtro',
        ),
    ),
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
        3 => 
        array (
            'name' => 'estado',
            'label' => 'Estado',
            'presentation' => 'ESTADOS_RECLAMOS',
            'initialvalue' => 'Inicial',
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
                    'name' => 'Prestacion.prestacion',
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
                    'name' => 'fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
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
                    'name' => 'direccion',
                    'label' => 'Dirección',
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
                    'name' => 'comentario',
                    'label' => 'Comentario',
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
                    'name' => 'vecino',
                    'label' => 'Vecino',
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
