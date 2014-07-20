<h1>Intrusions</h1>
<?php foreach ($intrusions as $intrusion): ?>
  <hr>
  <p><?php echo $intrusion['Intrusion']['description']; ?></p>
<?php endforeach; ?>
<?php unset($intrusion); ?>
