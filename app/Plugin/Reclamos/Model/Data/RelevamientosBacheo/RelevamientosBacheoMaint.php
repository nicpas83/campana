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
    'jsincludes' => 
    array (
        0 => 'reclamos/relevamientos_maint.js',
    ),
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
                ),
                4 => 
                array (
                    'name' => 'prestacion_id',
                    'label' => 'Tipo de Prestación',
                    'presentation' => 'SELECT',
                    'classparams' => '{\'model\':\'Reclamos.Prestacion\',\'conditions\':{\'Prestacion.competencia\':\'BACHEO\'}}',
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
                    'name' => 'reparacion_ancho',
                    'label' => 'Ancho',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                1 => 
                array (
                    'name' => 'reparacion_largo',
                    'label' => 'Largo',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                2 => 
                array (
                    'name' => 'reparacion_profundidad',
                    'label' => 'Profundidad',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
            ),
            'id' => '5',
            'title' => 'Reparación Bache',
            'columns' => '2',
        ),
        4 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'problemas_ancho',
                    'label' => 'Ancho',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                1 => 
                array (
                    'name' => 'problemas_largo',
                    'label' => 'Largo',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                2 => 
                array (
                    'name' => 'problemas_profundidad',
                    'label' => 'Profundidad',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
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
        5 => 
        array (
            'type' => 'files',
            'id' => 'archivos',
            'title' => 'Archivos',
        ),
    ),
);

}
