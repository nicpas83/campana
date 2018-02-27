<?php

App::uses('AppController', 'Controller');

class RelevamientosArboladoController extends AppController {

    public function add($return = null) {
        $this->render = ["add", "default"];
        $this->maint = Parse::getData('Reclamos.RelevamientosArbolado/RelevamientosArboladoMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->render = ["edit", "default"];
        $this->maint = Parse::getData('Reclamos.RelevamientosArbolado/RelevamientosArboladoMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Reclamos.RelevamientosArbolado/RelevamientosArboladoSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->render = ["view", "default"];
        $this->maint = Parse::getData('Reclamos.RelevamientosArbolado/RelevamientosArboladoMaint');
        parent::view($id, $return);
    }

}
