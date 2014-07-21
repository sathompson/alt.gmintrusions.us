<h1>Add Post</h1>
<?php
echo $this->Form->create('Intrusion');
echo $this->Form->input('description', array('rows' => '3', 'required' => true, 'label' => false));

echo $this->Form->end('Save');
?>
