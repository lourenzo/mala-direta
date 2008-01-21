<div class="subscribers form">
<?php echo $form->create('Subscriber');?>
	<fieldset>
 		<legend><?php __('Edit Subscriber');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('about');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Subscriber.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Subscriber.id'))); ?></li>
		<li><?php echo $html->link(__('List Subscribers', true), array('action'=>'index'));?></li>
	</ul>
</div>
