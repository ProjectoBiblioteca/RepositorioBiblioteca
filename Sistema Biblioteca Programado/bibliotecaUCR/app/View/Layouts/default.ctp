
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('layout');
		echo $this->Html->script(array('jquery-1.4.1.min','jquery.nivo.slider.pack','jquery.nivo.slider.setup'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<?php include('menu.php'); ?>
</head>
<body id="top">

<div class='container'>
 <div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
</div>


	<?php include('pie.php'); ?>	
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
