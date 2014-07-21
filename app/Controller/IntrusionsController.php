<?php

class IntrusionsController extends AppController {
  public $helpers = array('Html', 'Form');
  public $uses = array('Intrusion', 'Tag');
  public $components = array('Session');

  public function index() {
    $this->set('intrusions', $this->Intrusion->find('all'));
  }

  public function view($id = null) {
    $this->setIntrusion($id);
  }

  public function add() {
    if (isset($this->validationErrors)) {
      $this->flashError('uh oh');
    }
    if ($this->request->is('post')) {
      $this->Intrusion->create();
      if ($this->Intrusion->save($this->request->data)) {
        $this->flashSuccess(__('Intrusion saved.'));
        return $this->redirect(array('action' => 'index'));
      }
    } else {
      $this->set('tags', $this->Tag->find('all'));
    }
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

  private function flashError($msg = null) {
    if ($mgs) {
      $this->Session->setFlash($msg, 'error_flash');
    }
  }
}
