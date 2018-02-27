<?php

App::uses('AppController', 'Controller');

class RelevamientosController extends AppController {

    public function add($return = null) {
        $this->render = ["add", "default"];
        $this->maint = Parse::getData('Reclamos.Relevamientos/RelevamientosMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.Relevamientos/RelevamientosMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Reclamos.Relevamientos/RelevamientosSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->render = ["view", "default"];
        $this->maint = Parse::getData('Reclamos.Relevamientos/RelevamientosMaint');
        parent::view($id, $return);
    }

}
