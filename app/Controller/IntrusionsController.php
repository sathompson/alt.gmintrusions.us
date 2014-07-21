<?php

class IntrusionsController extends AppController {
  public $helpers = array('Html', 'Form');

  public function index() {
    $this->set('intrusions', $this->Intrusion->find('all'));
  }

  public function view($id = null) {
    $this->setIntrusion($id);
  }



  private function setIntrusion($id = null) {
    if (!$id) {
      throw new NotFoundException(__('Invalid intrusion'));
    }

    $intrusion = $this->Intrusion->findById($id);

    if (!$intrusion) {
      throw new NotFoundException(__('Invalid intrusion'));
    }

    $this->set('intrusion', $intrusion);
  }

  private function flashSuccess($msg = null) {
    if ($msg) {
      $this->Session->setFlash($msg, 'success_flash');
    }
  }
}
