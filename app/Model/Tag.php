<?php

class Tag extends AppModel {
  public $order = "name";
  public $validate = array(
    'name' => array(
      'isUnique' => array(
        'rule' => 'isUnique',
        'message' => 'Another tag with this name already exists.'
      ),
      'notEmpty' => array(
        'rule' => 'notEmpty',
        'message' => 'Name cannot be empty.'
      )
    )
  );
  public $hasAndBelongsToMany = array(
    'Intrusion' => array(
      'className' => 'Intrusion',
      'unique' => 'keepExisting',
      'order' => 'Intrusion.created DESC'
    )
  );
}
