<?php

App::uses('AppController', 'Controller');

class CompetenciasController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Reclamos.Competencias/CompetenciasMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.Competencias/CompetenciasMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Reclamos.Competencias/CompetenciasSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.Competencias/CompetenciasMaint');
        parent::view($id, $return);
    }

}
