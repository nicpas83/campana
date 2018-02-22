<?php

App::uses('AppController', 'Controller');

class PrestacionesController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Reclamos.Prestaciones/PrestacionesMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.Prestaciones/PrestacionesMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Reclamos.Prestaciones/PrestacionesSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.Prestaciones/PrestacionesMaint');
        parent::view($id, $return);
    }

}
