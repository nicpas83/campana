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
                    'name' => 'poda_especie',
                    'label' => 'Especie',
                ),
                1 => 
                array (
                    'name' => 'poda_altura',
                    'label' => 'Altura',
                ),
                2 => 
                array (
                    'name' => 'poda_dap',
                    'label' => 'DAP',
                ),
                3 => 
                array (
                    'name' => 'poda_inclinacion',
                    'label' => 'Inclinación',
                ),
                4 => 
                array (
                    'name' => 'poda_tipo',
                    'label' => 'Tipo de Poda',
                    'presentation' => 'SELECTARRAY',
                    'classparams' => '{\'options\':{\'Integral\':\'Integral\',\'Despeje\':\'Despeje\'}}',
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
                    'name' => 'reparacion_especie',
                    'label' => 'Especie',
                ),
                1 => 
                array (
                    'name' => 'reparacion_altura',
                    'label' => 'Altura',
                ),
                2 => 
                array (
                    'name' => 'reparacion_dap',
                    'label' => 'DAP',
                ),
                3 => 
                array (
                    'name' => 'reparacion_inclinacion',
                    'label' => 'Inclinación',
                ),
                4 => 
                array (
                    'name' => 'reparacion_ancho_vereda',
                    'label' => 'Ancho Vereda',
                    'presentation' => 'INT',
                    'note' => 'En metros.',
                ),
                5 => 
                array (
                    'name' => 'reparacion_estado_plantera',
                    'label' => 'Estado de Plantera',
                    'presentation' => 'SELECTARRAY',
                    'classparams' => '{\'options\':{\'Bueno\':\'Bueno\',\'Muy Bueno\':\'Muy Bueno\',\'Regular\':\'Regular\',\'Malo\':\'Malo\',\'Muy Malo\':\'Muy Malo\'}}',
                ),
                6 => 
                array (
                    'name' => 'reparacion_corte_raices',
                    'label' => 'Corte de Raíces',
                    'presentation' => 'SELECTARRAY',
                    'classparams' => '{\'options\':{\'Superficial\':\'Superficial\',\'Profundo\':\'Profundo\'}}',
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
                    'name' => 'extraccion_especie',
                    'label' => 'Especie',
                ),
                1 => 
                array (
                    'name' => 'extraccion_altura',
                    'label' => 'Altura',
                ),
                2 => 
                array (
                    'name' => 'extraccion_dap',
                    'label' => 'DAP',
                ),
                3 => 
                array (
                    'name' => 'extraccion_inclinacion',
                    'label' => 'Inclinación',
                ),
                4 => 
                array (
                    'name' => 'extraccion_ancho_vereda',
                    'label' => 'Ancho Vereda',
                    'presentation' => 'INT',
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
                    'name' => 'plantacion_ancho_vereda',
                    'label' => 'Ancho de Vereda',
                    'note' => 'En metros.',
                ),
                1 => 
                array (
                    'name' => 'plantacion_estado_plantera',
                    'label' => 'Estado de Plantera',
                    'presentation' => 'SELECTARRAY',
                    'classparams' => '{\'options\':{\'Bueno\':\'Bueno\',\'Muy Bueno\':\'Muy Bueno\',\'Regular\':\'Regular\',\'Malo\':\'Malo\',\'Muy Malo\':\'Muy Malo\'}}',
                ),
                2 => 
                array (
                    'name' => 'plantacion_especie_sugerida',
                    'label' => 'Especie Sugerida',
                ),
            ),
            'id' => '4',
            'title' => 'Plantación de Árbol',
            'columns' => '2',
        ),
        7 => 
        array (
            'type' => 'files',
            'id' => 'archivos',
            'title' => 'Archivos',
        ),
    ),
);

}
