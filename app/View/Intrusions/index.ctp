<h1>Intrusions</h1>
<?php foreach ($intrusions as $intrusion): ?>
  <hr>
  <p><?php echo $this->Html->link($intrusion['Intrusion']['description'], array('controller' => 'intrusions', 'action' => 'view', $intrusion['Intrusion']['id'])); ?></p>
  <p><?php echo $intrusion['Intrusion']['created']; ?></p>
<?php endforeach; ?>
<?php unset($intrusion); ?>
