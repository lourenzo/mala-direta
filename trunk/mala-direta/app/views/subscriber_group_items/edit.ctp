<div class="subscriberGroupItems form">
<?php echo $form->create('SubscriberGroupItem');?>
	<fieldset>
 		<legend><?php __('Edit SubscriberGroupItem');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('subscriber_group_id');
		echo $form->input('subscriber_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('SubscriberGroupItem.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SubscriberGroupItem.id'))); ?></li>
		<li><?php echo $html->link(__('List SubscriberGroupItems', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Subscriber Groups', true), array('controller'=> 'subscriber_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Subscriber Group', true), array('controller'=> 'subscriber_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Subscribers', true), array('controller'=> 'subscribers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Subscriber', true), array('controller'=> 'subscribers', 'action'=>'add')); ?> </li>
	</ul>
</div>
