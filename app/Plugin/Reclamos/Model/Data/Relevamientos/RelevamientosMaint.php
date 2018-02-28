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
                    'name' => 'fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                    'classparams' => '{\'force\':true}',
                ),
                1 => 
                array (
                    'name' => 'vecino',
                    'label' => 'Nombre del Vecino',
                ),
                2 => 
                array (
                    'name' => 'vecino_telefono',
                    'label' => 'Teléfono del Vecino',
                    'presentation' => 'INT',
                ),
                3 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADOS_RECLAMOS',
                    'initialvalue' => 'Iniciado',
                ),
                4 => 
                array (
                    'name' => 'prestacion_id',
                    'label' => 'Tipo de Prestación',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Reclamos.Prestacion\',\'conditions\':{\'Prestacion.competencia\':\'ARBOLADO\'}}',
                ),
            ),
            'id' => 'reclamo',
            'title' => 'Datos del Reclamo',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'direccion',
                    'label' => 'Dirección',
                ),
                1 => 
                array (
                    'name' => 'tmp_provincia',
                    'label' => 'Provincia',
                    'isvisible' => false,
                    'initialvalue' => 'Campana, Provincia de Buenos Aires',
                ),
                2 => 
                array (
                    'name' => 'tmp_pais',
                    'label' => 'País',
                    'isvisible' => false,
                    'initialvalue' => 'Argentina',
                ),
            ),
            'id' => 'ubicacion',
            'title' => 'Ubicación del Reclamo',
        ),
        2 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'coordenadas',
                    'label' => '',
                    'presentation' => 'GOOGLEMAP',
                    'classparams' => '{\'calle_altura\':\'direccion\', \'provincia\':\'tmp_provincia\', \'pais\':\'tmp_pais\'}',
                ),
            ),
            'id' => 'mapa',
            'title' => 'Mapa',
        ),
        3 => 
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
            ),
            'id' => 'inicio',
            'title' => 'Observaciones',
            'columns' => '2',
        ),
        4 => 
        array (
            'type' => 'files',
            'id' => 'archivos',
            'title' => 'Archivos',
        ),
    ),
);

}
