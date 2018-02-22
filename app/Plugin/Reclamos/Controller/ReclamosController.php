<?php

App::uses('AppController', 'Controller');

class ReclamosController extends AppController {

    public function add($return = null) {
        $this->maint = Parse::getData('Reclamos.Reclamos/ReclamosMaint');
        parent::add($return);
    }

    public function edit($id = null, $return = null) {
        $this->maint = Parse::getData('Reclamos.Reclamos/ReclamosMaint');
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
