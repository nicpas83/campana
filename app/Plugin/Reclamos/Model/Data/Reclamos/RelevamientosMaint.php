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
    'jsincludes' => 
    array (
        0 => 'reclamos/reclamos_maint.js',
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
                    'name' => 'prestacion_id',
                    'label' => 'Prestación',
                    'presentation' => 'AUTOCOMPLETE',
                    'classparams' => '{\'model\':\'Reclamos.Prestacion\'}',
                    'readonly' => true,
                ),
                1 => 
                array (
                    'name' => 'fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                    'readonly' => true,
                ),
                2 => 
                array (
                    'name' => 'vecino',
                    'label' => 'Nombre del Vecino',
                    'readonly' => true,
                ),
                3 => 
                array (
                    'name' => 'vecino_telefono',
                    'label' => 'Teléfono del Vecino',
                    'presentation' => 'INT',
                    'readonly' => true,
                ),
                4 => 
                array (
                    'name' => 'comentario',
                    'label' => 'Reclamo',
                    'presentation' => 'TEXTAREA',
                    'readonly' => true,
                ),
                5 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADOS_RECLAMOS',
                ),
                6 => 
                array (
                    'name' => 'tmp_relevamiento_fecha',
                    'label' => 'Fecha de Relevado',
                    'presentation' => 'DATE',
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
                    'readonly' => true,
                ),
                1 => 
                array (
                    'name' => 'tmp_provincia',
                    'label' => 'Provincia',
                    'isvisible' => false,
                    'readonly' => true,
                    'initialvalue' => 'Campana, Provincia de Buenos Aires',
                ),
                2 => 
                array (
                    'name' => 'tmp_pais',
                    'label' => 'País',
                    'isvisible' => false,
                    'readonly' => true,
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
                    'readonly' => true,
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
                    'name' => 'tmp_relevamiento_observaciones',
                    'label' => 'Observaciones',
                    'presentation' => 'TEXTAREA',
                ),
            ),
            'id' => 'otros',
            'title' => 'Otros Relevamientos',
            'columns' => '2',
        ),
    ),
);

}
