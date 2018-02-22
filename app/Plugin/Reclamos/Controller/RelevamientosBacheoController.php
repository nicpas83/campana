<?php

App::uses('AppController', 'Controller');

class RelevamientosBacheoController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Reclamos.RelevamientosBacheo/RelevamientosBacheoMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.RelevamientosBacheo/RelevamientosBacheoMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Reclamos.RelevamientosBacheo/RelevamientosBacheoSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.RelevamientosBacheo/RelevamientosBacheoMaint');
        parent::view($id, $return);
    }

}
