<div class="mailTransmissionSchedules index">
<h2><?php __('MailTransmissionSchedules');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('smtp_account_id');?></th>
	<th><?php echo $paginator->sort('subscriber_group_id');?></th>
	<th><?php echo $paginator->sort('message_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($mailTransmissionSchedules as $mailTransmissionSchedule):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $mailTransmissionSchedule['MailTransmissionSchedule']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($mailTransmissionSchedule['SmtpAccount']['id'], array('controller'=> 'smtp_accounts', 'action'=>'view', $mailTransmissionSchedule['SmtpAccount']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($mailTransmissionSchedule['SubscriberGroup']['name'], array('controller'=> 'subscriber_groups', 'action'=>'view', $mailTransmissionSchedule['SubscriberGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($mailTransmissionSchedule['Message']['name'], array('controller'=> 'messages', 'action'=>'view', $mailTransmissionSchedule['Message']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $mailTransmissionSchedule['MailTransmissionSchedule']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $mailTransmissionSchedule['MailTransmissionSchedule']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $mailTransmissionSchedule['MailTransmissionSchedule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mailTransmissionSchedule['MailTransmissionSchedule']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New MailTransmissionSchedule', true), array('action'=>'add')); ?></li>
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
