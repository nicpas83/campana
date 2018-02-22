<?php

App::uses('pst_selectarray', 'Presentation');

class pst_estados_reclamos extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'Inicial' => 'Inicial',
            'Verificación' => 'Verificación',
            'Planificación' => 'Planificación',
            'Resuelto' => 'Resuelto',
            'Inexistente' => 'Inexistente',
            
        );
        parent::__construct($settings);
    }

}