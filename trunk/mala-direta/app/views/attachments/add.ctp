<div class="attachments form">
<?php echo $form->create('Attachment');?>
	<fieldset>
 		<legend><?php __('Add Attachment');?></legend>
	<?php
		echo $form->input('filename');
		echo $form->input('display');
		echo $form->input('cid');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Attachments', true), array('action'=>'index'));?></li>
	</ul>
</div>
