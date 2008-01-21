<div class="subscriberGroups form">
<?php echo $form->create('SubscriberGroup');?>
	<fieldset>
 		<legend><?php __('Edit SubscriberGroup');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('about');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('SubscriberGroup.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SubscriberGroup.id'))); ?></li>
		<li><?php echo $html->link(__('List SubscriberGroups', true), array('action'=>'index'));?></li>
	</ul>
</div>
