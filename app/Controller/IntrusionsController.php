<?php

class IntrusionsController extends AppController {
  public $helpers = array('Html', 'Form');

  public function index() {
    $this->set('intrusions', $this->Intrusion->find('all'));
  }
}
