<?php

App::uses('pst_selectarray', 'Presentation');

class pst_competencia extends pst_selectarray {

    public function __construct($settings) {
        $this->options = array(
            'ARBOLADO' => 'ARBOLADO',
            'BACHEO' => 'BACHEO',
            
        );
        parent::__construct($settings);
    }

}