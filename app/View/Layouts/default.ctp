<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>GM Intrusions!</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<?php
		echo $this->Html->css('application');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<?php echo $this->Html->link('GMIntrusions.us', '/', array('class' => 'navbar-brand')); ?>
				</div>
				<ul class="nav navbar-nav">
					<li><?php echo $this->Html->link('About', ''); ?></li>
					<li><?php echo $this->Html->link('Contact Us', ''); ?></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><?php echo $this->Html->link('All Tags', ''); ?></li>
					<li><?php echo $this->Html->link('New Intrusion', ''); ?></li>
					<li><?php echo $this->Html->link('New Tag', ''); ?></li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="container" id="alerts">
		<?php
		if (isset($error_msgs)) {
			foreach ($error_msgs as $msg) {
				echo $this->Html->div('alert alert-danger', $msg);
			}
		}
		if (isset($warning_msgs)) {
			foreach ($warning_msgs as $msg) {
				echo $this->Html->div('alert alert-warning', $msg);
			}
		}
		if (isset($info_msgs)) {
			foreach ($info_msgs as $msg) {
				echo $this->Html->div('alert alert-info', $msg);
			}
		}
		if (isset($success_msgs)) {
			foreach ($success_msgs as $msg) {
				echo $this->Html->div('alert alert-success', $msg);
			}
		}
		unset($msg);
		?>
	</div>

	<div class="container">
		<?php echo $this->fetch('content'); ?>
	</div>

	<footer class="footer">
		<div class="container text-center">
			<nav role="navigation">
				<ul class="list-inline">
					<li><?php echo $this->Html->link('About', ''); ?></li>
					<li><?php echo $this->Html->link('Contact Us', ''); ?></li>
				</ul>
			</nav>
			<p>
				<?php echo $this->Html->Link('Numenera and its logo are trademarks of Monte Cook Games, LLC in the U.S.A. and other countries. All Monte Cook Games characters and character names, and the distinctive likenesses thereof, are trademarks of Monte Cook Games, LLC. Content derived from Monte Cook Games publications is © 2013-2014 Monte Cook Games, LLC.',
				array('controller' => 'pages', 'action' => 'display', 'disclaimer'), array('class' => 'text-muted')); ?>
			</p>
		</div>
	</footer>
</body>
</html>
