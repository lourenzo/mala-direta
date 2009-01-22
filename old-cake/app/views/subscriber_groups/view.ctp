<div class="subscriberGroups view">
<h2><?php  __('SubscriberGroup');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriberGroup['SubscriberGroup']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriberGroup['SubscriberGroup']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('About'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriberGroup['SubscriberGroup']['about']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SubscriberGroup', true), array('action'=>'edit', $subscriberGroup['SubscriberGroup']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SubscriberGroup', true), array('action'=>'delete', $subscriberGroup['SubscriberGroup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscriberGroup['SubscriberGroup']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SubscriberGroups', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SubscriberGroup', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
