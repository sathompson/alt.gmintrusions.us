<?php

class Intrusion extends AppModel {
  public $order = "Intrusion.created_at DESC";
  public $validate = array(
    'description' => array(
      'isUnique' => array(
        'rule' => 'isUnique',
        'message' => 'Another intrusion with this description already exists.'
      ),
      'notEmpty' => array(
        'rule' => 'notEmpty',
        'message' => 'Description cannot be empty.'
      )
    )
  );
  public $hasAndBelongsToMany = array(
    'Tag' => array(
      'className' => 'Tag',
      'unique' => 'keepExisting',
      'order' => 'name'
    )
  );
}
