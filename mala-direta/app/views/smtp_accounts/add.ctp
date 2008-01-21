<div class="smtpAccounts form">
<?php echo $form->create('SmtpAccount');?>
	<fieldset>
 		<legend><?php __('Add SmtpAccount');?></legend>
	<?php
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('host');
		echo $form->input('tls');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List SmtpAccounts', true), array('action'=>'index'));?></li>
	</ul>
</div>
