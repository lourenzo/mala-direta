<div class="subscriberGroupItems view">
<h2><?php  __('SubscriberGroupItem');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriberGroupItem['SubscriberGroupItem']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subscriber Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($subscriberGroupItem['SubscriberGroup']['name'], array('controller'=> 'subscriber_groups', 'action'=>'view', $subscriberGroupItem['SubscriberGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subscriber'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($subscriberGroupItem['Subscriber']['name'], array('controller'=> 'subscribers', 'action'=>'view', $subscriberGroupItem['Subscriber']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SubscriberGroupItem', true), array('action'=>'edit', $subscriberGroupItem['SubscriberGroupItem']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SubscriberGroupItem', true), array('action'=>'delete', $subscriberGroupItem['SubscriberGroupItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscriberGroupItem['SubscriberGroupItem']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SubscriberGroupItems', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SubscriberGroupItem', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Subscriber Groups', true), array('controller'=> 'subscriber_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Subscriber Group', true), array('controller'=> 'subscriber_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Subscribers', true), array('controller'=> 'subscribers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Subscriber', true), array('controller'=> 'subscribers', 'action'=>'add')); ?> </li>
	</ul>
</div>
