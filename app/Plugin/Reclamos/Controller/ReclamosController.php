<?php

App::uses('AppController', 'Controller');

class ReclamosController extends AppController {

    public function add($return = null) {
        $this->render = ["add", "default"];
        $this->maint = Parse::getData('Reclamos.Reclamos/ReclamosMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->render = ["edit", "default"];
        $this->maint = Parse::getData('Reclamos.Reclamos/ReclamosMaint');
        parent::edit($id, $return);
    }

    public function relevar_arbolado($id = null, $return = null) {
        $this->render = ["edit_arbolado", "default"];
        $this->maint = Parse::getData('Reclamos.Reclamos/RelevamientosArboladoMaint');
        parent::edit($id, $return);
    }

    public function relevar_bacheo($id = null, $return = null) {
        $this->render = ["edit_bacheo", "default"];

        $this->maint = Parse::getData('Reclamos.Reclamos/RelevamientosBacheoMaint');
        parent::edit($id, $return);
    }

    public function relevar_otro($id = null, $return = null) {
        $this->render = ["edit_otros", "default"];

        $this->maint = Parse::getData('Reclamos.Reclamos/RelevamientosMaint');
        parent::edit($id, $return);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Reclamos.Reclamos/ReclamosSL');
        parent::index($last);
    }

    public function view($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.Reclamos/ReclamosMaint');
        parent::view($id, $return);
    }

}
