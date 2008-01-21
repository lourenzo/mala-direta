<div class="actions form">
<?php echo $form->create('Action');?>
	<fieldset>
 		<legend><?php __('Edit Action');?></legend>
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Action.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Action.id'))); ?></li>
		<li><?php echo $html->link(__('List Actions', true), array('action'=>'index'));?></li>
	</ul>
</div>
