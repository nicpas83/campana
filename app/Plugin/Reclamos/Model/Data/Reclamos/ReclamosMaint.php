<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class ReclamosMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'jsincludes' => 
    array (
        0 => 'reclamos_comunas_maint.js',
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
                ),
                1 => 
                array (
                    'name' => 'fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                ),
                2 => 
                array (
                    'name' => 'vecino',
                    'label' => 'Nombre del Vecino',
                ),
                3 => 
                array (
                    'name' => 'vecino_telefono',
                    'label' => 'Teléfono del Vecino',
                    'presentation' => 'INT',
                ),
                4 => 
                array (
                    'name' => 'comentario',
                    'label' => 'Reclamo',
                    'presentation' => 'TEXTAREA',
                ),
                5 => 
                array (
                    'name' => 'estado',
                    'label' => 'Estado',
                    'presentation' => 'ESTADOS_RECLAMOS',
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
            'type' => 'files',
            'title' => 'Archivos Adjuntos',
        ),
    ),
);

}
