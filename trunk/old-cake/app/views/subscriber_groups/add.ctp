<div class="subscriberGroups form">
<?php echo $form->create('SubscriberGroup');?>
	<fieldset>
 		<legend><?php __('Add SubscriberGroup');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('about');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List SubscriberGroups', true), array('action'=>'index'));?></li>
	</ul>
</div>
