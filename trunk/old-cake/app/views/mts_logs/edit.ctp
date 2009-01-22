<div class="mtsLogs form">
<?php echo $form->create('MtsLog');?>
	<fieldset>
 		<legend><?php __('Edit MtsLog');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('mail_transmission_schedule_id');
		echo $form->input('subscriber_id');
		echo $form->input('status');
		echo $form->input('about');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('MtsLog.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('MtsLog.id'))); ?></li>
		<li><?php echo $html->link(__('List MtsLogs', true), array('action'=>'index'));?></li>
	</ul>
</div>
