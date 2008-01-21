<div class="subscribers form">
<?php echo $form->create('Subscriber');?>
	<fieldset>
 		<legend><?php __('Add Subscriber');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('about');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Subscribers', true), array('action'=>'index'));?></li>
	</ul>
</div>
