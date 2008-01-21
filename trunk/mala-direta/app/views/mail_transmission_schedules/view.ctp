<div class="mailTransmissionSchedules view">
<h2><?php  __('MailTransmissionSchedule');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mailTransmissionSchedule['MailTransmissionSchedule']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Smtp Account'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($mailTransmissionSchedule['SmtpAccount']['id'], array('controller'=> 'smtp_accounts', 'action'=>'view', $mailTransmissionSchedule['SmtpAccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subscriber Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($mailTransmissionSchedule['SubscriberGroup']['name'], array('controller'=> 'subscriber_groups', 'action'=>'view', $mailTransmissionSchedule['SubscriberGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Message'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($mailTransmissionSchedule['Message']['name'], array('controller'=> 'messages', 'action'=>'view', $mailTransmissionSchedule['Message']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit MailTransmissionSchedule', true), array('action'=>'edit', $mailTransmissionSchedule['MailTransmissionSchedule']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete MailTransmissionSchedule', true), array('action'=>'delete', $mailTransmissionSchedule['MailTransmissionSchedule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mailTransmissionSchedule['MailTransmissionSchedule']['id'])); ?> </li>
		<li><?php echo $html->link(__('List MailTransmissionSchedules', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New MailTransmissionSchedule', true), array('action'=>'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Mts Logs');?></h3>
	<?php if (!empty($mailTransmissionSchedule['MtsLog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Mail Transmission Schedule Id'); ?></th>
		<th><?php __('Subscriber Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('About'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($mailTransmissionSchedule['MtsLog'] as $mtsLog):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $mtsLog['id'];?></td>
			<td><?php echo $mtsLog['mail_transmission_schedule_id'];?></td>
			<td><?php echo $mtsLog['subscriber_id'];?></td>
			<td><?php echo $mtsLog['status'];?></td>
			<td><?php echo $mtsLog['about'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'mts_logs', 'action'=>'view', $mtsLog['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'mts_logs', 'action'=>'edit', $mtsLog['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'mts_logs', 'action'=>'delete', $mtsLog['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mtsLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Mts Log', true), array('controller'=> 'mts_logs', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
