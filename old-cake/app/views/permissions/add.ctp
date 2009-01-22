<div class="permissions form">
<?php echo $form->create('Permission');?>
	<fieldset>
 		<legend><?php __('Add Permission');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('action_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Permissions', true), array('action'=>'index'));?></li>
	</ul>
</div>
