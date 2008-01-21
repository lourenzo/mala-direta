<div class="mailTransmissionSchedules form">
<?php echo $form->create('MailTransmissionSchedule');?>
	<fieldset>
 		<legend><?php __('Add MailTransmissionSchedule');?></legend>
	<?php
		echo $form->input('smtp_account_id');
		echo $form->input('subscriber_group_id');
		echo $form->input('message_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List MailTransmissionSchedules', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Smtp Accounts', true), array('controller'=> 'smtp_accounts', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Smtp Account', true), array('controller'=> 'smtp_accounts', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Subscriber Groups', true), array('controller'=> 'subscriber_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Subscriber Group', true), array('controller'=> 'subscriber_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Messages', true), array('controller'=> 'messages', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Message', true), array('controller'=> 'messages', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Mts Logs', true), array('controller'=> 'mts_logs', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Mts Log', true), array('controller'=> 'mts_logs', 'action'=>'add')); ?> </li>
	</ul>
</div>
