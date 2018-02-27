<?php

class Reclamo extends AppModel {

    public $label = 'Reclamos';
    public $tablePrefix = 'rec_';
    public $useTable = 'reclamos';
    public $plugin = 'Reclamos';
    public $belongsTo = [
        'Prestacion' => [
            'className' => 'Reclamos.Prestacion',
            'foreignKey' => 'prestacion_id',
        ],
    ];
    public $hasMany = [
        'RelevamientoArbolado' => [
            'className' => 'Reclamos.RelevamientoArbolado',
            'foreignKey' => 'reclamo_id',
        ],
        'RelevamientoBacheo' => [
            'className' => 'Reclamos.RelevamientoBacheo',
            'foreignKey' => 'reclamo_id',
        ],
        'Relevamiento' => [
            'className' => 'Reclamos.Relevamiento',
            'foreignKey' => 'reclamo_id',
        ],
    ];

//    public $validate = array(
//        'prestacion_id' => array(
//            'required' => array(
//                'rule' => array('notBlank'),
//                'message' => 'El campo Prestación es requerido'
//            )
//        ),
//        'estado' => array(
//            'required' => array(
//                'rule' => array('notBlank'),
//                'message' => 'El campo Estado es requerido'
//            )
//        ),
//        'fecha' => array(
//            'required' => array(
//                'rule' => array('notBlank'),
//                'message' => 'El campo Fecha es requerido'
//            )
//        ),
//        'comentario' => array(
//            'required' => array(
//                'rule' => array('notBlank'),
//                'message' => 'El campo Reclamo es requerido'
//            )
//        ),
//        'direccion' => array(
//            'required' => array(
//                'rule' => array('notBlank'),
//                'message' => 'El campo Dirección es requerido'
//            )
//        ),
//        'tmp_relevamiento_observaciones' => array(
//            'required' => array(
//                'rule' => array('notBlank'),
//                'message' => 'El campo Observaciones es requerido'
//            )
//        ),
//        'tmp_poda_especie' => array(
//            'required' => array(
//                'rule' => array('notBlank'),
//                'message' => 'El campo Especie es requerido'
//            )
//        ),
//        'tmp_poda_altura' => array(
//            'required' => array(
//                'rule' => array('notBlank'),
//                'message' => 'El campo Altura es requerido'
//            )
//        ),
//    );

    public function beforeSave($options = []) {

        if (isset($this->data['Reclamo']['tmp_poda_fecha'])) {
            $prestacion = $this->data['Reclamo']['prestacion_id'];
            $podaEspecie = $this->data['Reclamo']['tmp_poda_especie'];
            $podaAltura = $this->data['Reclamo']['tmp_poda_altura'];
            $podaDap = $this->data['Reclamo']['tmp_poda_dap'];
            $podaInclinacion = $this->data['Reclamo']['tmp_poda_inclinacion'];
            $podaTipo = $this->data['Reclamo']['tmp_poda_tipo'];
            $reparacionEspecie = $this->data['Reclamo']['tmp_reparacion_especie'];
            $reparacionAltura = $this->data['Reclamo']['tmp_reparacion_altura'];
            $reparacionDap = $this->data['Reclamo']['tmp_reparacion_dap'];
            $reparacionInclinacion = $this->data['Reclamo']['tmp_reparacion_inclinacion'];
            $reparacionAnchoVereda = $this->data['Reclamo']['tmp_reparacion_ancho_vereda'];
            $reparacionEstadoPlantera = $this->data['Reclamo']['tmp_reparacion_estado_plantera'];
            $reparacionCorteRaices = $this->data['Reclamo']['tmp_reparacion_corte_raices'];
            $extraccionEspecie = $this->data['Reclamo']['tmp_extraccion_especie'];
            $extraccionAltura = $this->data['Reclamo']['tmp_extraccion_altura'];
            $extraccionDap = $this->data['Reclamo']['tmp_extraccion_dap'];
            $extraccionInclinacion = $this->data['Reclamo']['tmp_extraccion_inclinacion'];
            $extraccionAnchoVereda = $this->data['Reclamo']['tmp_extraccion_ancho_vereda'];
            $plantacionAnchoVereda = $this->data['Reclamo']['tmp_plantacion_ancho_vereda'];
            $estadoPlantera = $this->data['Reclamo']['tmp_plantacion_estado_plantera'];
            $especieSugerida = $this->data['Reclamo']['tmp_plantacion_especie_sugerida'];
            $relevamientoFecha = $this->data['Reclamo']['tmp_relevamiento_fecha'];

            $this->RelevamientoArbolado->create();
            $this->RelevamientoArbolado->save([
                'reclamo_id' => $this->id,
                'prestacion_id' => $prestacion,
                'poda_especie' => $podaEspecie,
                'poda_altura' => $podaAltura,
                'poda_dap' => $podaDap,
                'poda_inclinacion' => $podaInclinacion,
                'poda_tipo' => $podaTipo,
                'reparacion_especie' => $reparacionEspecie,
                'reparacion_altura' => $reparacionAltura,
                'reparacion_dap' => $reparacionDap,
                'reparacion_inclinacion' => $reparacionInclinacion,
                'reparacion_ancho_vereda' => $reparacionAnchoVereda,
                'reparacion_estado_plantera' => $reparacionEstadoPlantera,
                'reparacion_corte_raices' => $reparacionCorteRaices,
                'extraccion_especie' => $extraccionEspecie,
                'extraccion_altura' => $extraccionAltura,
                'extraccion_dap' => $extraccionDap,
                'extraccion_inclinacion' => $extraccionInclinacion,
                'extraccion_ancho_vereda' => $extraccionAnchoVereda,
                'plantacion_ancho_vereda' => $plantacionAnchoVereda,
                'plantacion_estado_plantera' => $estadoPlantera,
                'plantacion_especie_sugerida' => $especieSugerida,
                'fecha' => $relevamientoFecha,
            ]);
        }

        if (isset($this->data['Reclamo']['tmp_bacheo_reparacion_ancho'])) {
            $prestacion = $this->data['Reclamo']['prestacion_id'];
            $bacheoReparacionAncho = $this->data['Reclamo']['tmp_bacheo_reparacion_ancho'];
            $bacheoReparacionLargo = $this->data['Reclamo']['tmp_bacheo_reparacion_largo'];
            $bacheoReparacionProfundidad = $this->data['Reclamo']['tmp_bacheo_reparacion_profundidad'];
            $bacheoProblemasAncho = $this->data['Reclamo']['tmp_bacheo_problemas_ancho'];
            $bacheoProblemasLargo = $this->data['Reclamo']['tmp_bacheo_problemas_largo'];
            $bacheoProblemasProfundidad = $this->data['Reclamo']['tmp_bacheo_problemas_profundidad'];
            $bacheoProblemasEmpresa = $this->data['Reclamo']['tmp_bacheo_problemas_empresa'];
            $relevamientoFecha = $this->data['Reclamo']['tmp_relevamiento_fecha'];

            $this->RelevamientoBacheo->create();
            $this->RelevamientoBacheo->save([
                'reclamo_id' => $this->id,
                'prestacion_id' => $prestacion,
                'reparacion_ancho' => $bacheoReparacionAncho,
                'reparacion_largo' => $bacheoReparacionLargo,
                'reparacion_profundidad' => $bacheoReparacionProfundidad,
                'problemas_ancho' => $bacheoProblemasAncho,
                'problemas_largo' => $bacheoProblemasLargo,
                'problemas_profundidad' => $bacheoProblemasProfundidad,
                'problemas_empresa' => $bacheoProblemasEmpresa,
                'fecha' => $relevamientoFecha,
            ]);
        }

        if (isset($this->data['Reclamo']['tmp_relevamiento_observaciones'])) {
            $prestacion = $this->data['Reclamo']['prestacion_id'];
            $relevamientoObservacion = $this->data['Reclamo']['tmp_relevamiento_observaciones'];
            $relevamientoFecha = $this->data['Reclamo']['tmp_relevamiento_fecha'];
            $this->Relevamiento->create();
            $this->Relevamiento->save([
                'reclamo_id' => $this->id,
                'prestacion_id' => $prestacion,
                'observaciones' => $relevamientoObservacion,
                'fecha' => $relevamientoFecha,
            ]);
        }
        return parent::beforeSave($options);
    }

}
