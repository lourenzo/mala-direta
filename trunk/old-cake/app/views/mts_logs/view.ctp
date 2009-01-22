<div class="mtsLogs view">
<h2><?php  __('MtsLog');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mtsLog['MtsLog']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mail Transmission Schedule Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mtsLog['MtsLog']['mail_transmission_schedule_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subscriber Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mtsLog['MtsLog']['subscriber_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mtsLog['MtsLog']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('About'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mtsLog['MtsLog']['about']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit MtsLog', true), array('action'=>'edit', $mtsLog['MtsLog']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete MtsLog', true), array('action'=>'delete', $mtsLog['MtsLog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mtsLog['MtsLog']['id'])); ?> </li>
		<li><?php echo $html->link(__('List MtsLogs', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New MtsLog', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
