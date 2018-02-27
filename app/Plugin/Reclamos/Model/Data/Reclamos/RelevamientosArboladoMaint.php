<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class RelevamientosArboladoMaint extends AbstractData {

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
                1 => 
                array (
                    'name' => 'prestacion_id',
                    'label' => 'Prestación',
                    'presentation' => 'AUTOCOMPLETE',
                    'classparams' => '{\'model\':\'Reclamos.Prestacion\'}',
                    'readonly' => true,
                ),
                2 => 
                array (
                    'name' => 'fecha_relevado',
                    'label' => 'Fecha de Relevado',
                    'presentation' => 'DATE',
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
                    'name' => 'tmp_poda_especie',
                    'label' => 'Especie',
                    'breakline' => true,
                ),
                1 => 
                array (
                    'name' => 'tmp_poda_altura',
                    'label' => 'Altura',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                2 => 
                array (
                    'name' => 'tmp_poda_dap',
                    'label' => 'DAP',
                ),
                3 => 
                array (
                    'name' => 'tmp_poda_inclinacion',
                    'label' => 'Inclinación',
                    'size' => 25,
                ),
                4 => 
                array (
                    'name' => 'tmp_poda_tipo',
                    'label' => 'Tipo de Poda',
                    'presentation' => 'SELECTARRAY',
                    'classparams' => '{\'options\':{\'Integral\':\'Integral\',\'Despeje\':\'Despeje\'}}',
                ),
                5 => 
                array (
                    'name' => 'tmp_poda_fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                ),
            ),
            'id' => '1',
            'title' => 'Poda',
            'columns' => '2',
        ),
        4 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'tmp_reparacion_especie',
                    'label' => 'Especie',
                    'breakline' => true,
                ),
                1 => 
                array (
                    'name' => 'tmp_reparacion_altura',
                    'label' => 'Altura',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                2 => 
                array (
                    'name' => 'tmp_reparacion_dap',
                    'label' => 'DAP',
                ),
                3 => 
                array (
                    'name' => 'tmp_reparacion_inclinacion',
                    'label' => 'Inclinación',
                    'size' => 25,
                ),
                4 => 
                array (
                    'name' => 'tmp_reparacion_ancho_vereda',
                    'label' => 'Ancho Vereda',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                5 => 
                array (
                    'name' => 'tmp_reparacion_estado_plantera',
                    'label' => 'Estado de Plantera',
                    'presentation' => 'SELECTARRAY',
                    'classparams' => '{\'options\':{\'Bueno\':\'Bueno\',\'Muy Bueno\':\'Muy Bueno\',\'Regular\':\'Regular\',\'Malo\':\'Malo\',\'Muy Malo\':\'Muy Malo\'}}',
                ),
                6 => 
                array (
                    'name' => 'tmp_reparacion_corte_raices',
                    'label' => 'Corte de Raíces',
                    'presentation' => 'SELECTARRAY',
                    'classparams' => '{\'options\':{\'Superficial\':\'Superficial\',\'Profundo\':\'Profundo\'}}',
                ),
                7 => 
                array (
                    'name' => 'tmp_reparacion_fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                ),
            ),
            'id' => '2',
            'title' => 'Reparacion de Vereda por Raíces',
            'columns' => '2',
        ),
        5 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'tmp_extraccion_especie',
                    'label' => 'Especie',
                    'breakline' => true,
                ),
                1 => 
                array (
                    'name' => 'tmp_extraccion_altura',
                    'label' => 'Altura',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                2 => 
                array (
                    'name' => 'tmp_extraccion_dap',
                    'label' => 'DAP',
                ),
                3 => 
                array (
                    'name' => 'tmp_extraccion_inclinacion',
                    'label' => 'Inclinación',
                    'size' => 25,
                ),
                4 => 
                array (
                    'name' => 'tmp_extraccion_ancho_vereda',
                    'label' => 'Ancho Vereda',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                5 => 
                array (
                    'name' => 'tmp_extraccion_fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                ),
            ),
            'id' => '3',
            'title' => 'Extracción de Árbol',
            'columns' => '2',
        ),
        6 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'tmp_plantacion_ancho_vereda',
                    'label' => 'Ancho de Vereda',
                    'presentation' => 'FLOAT',
                    'note' => 'En metros.',
                ),
                1 => 
                array (
                    'name' => 'tmp_plantacion_estado_plantera',
                    'label' => 'Estado de Plantera',
                    'presentation' => 'SELECTARRAY',
                    'classparams' => '{\'options\':{\'Bueno\':\'Bueno\',\'Muy Bueno\':\'Muy Bueno\',\'Regular\':\'Regular\',\'Malo\':\'Malo\',\'Muy Malo\':\'Muy Malo\'}}',
                ),
                2 => 
                array (
                    'name' => 'tmp_plantacion_especie_sugerida',
                    'label' => 'Especie Sugerida',
                ),
                3 => 
                array (
                    'name' => 'tmp_plantacion_fecha',
                    'label' => 'Fecha',
                    'presentation' => 'DATE',
                ),
            ),
            'id' => '4',
            'title' => 'Plantación de Árbol',
            'columns' => '2',
        ),
    ),
);

}
