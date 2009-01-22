<div class="actions form">
<?php echo $form->create('Action');?>
	<fieldset>
 		<legend><?php __('Add Action');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('about');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Actions', true), array('action'=>'index'));?></li>
	</ul>
</div>
