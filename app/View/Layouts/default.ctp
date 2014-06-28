<?php
/**
 *
 *
 * @link          http://franciscomemoli.github.io
 * @package       app.View.Layouts
 * @since         v 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$pageName = __("top_garden","Top Garden") ;
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $pageName ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($pageName, array('controller' => 'posts', 'action' => 'index'));?></h1>
			<h1><?php echo $this->Html->link("logout", array('controller' => 'users', 'action' => 'logout'));?></h1>
		</div>
		<div id="content">
			<?php echo __("AllSettings")?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $pageName, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
