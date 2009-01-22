<div class="smtpAccounts view">
<h2><?php  __('SmtpAccount');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smtpAccount['SmtpAccount']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smtpAccount['SmtpAccount']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smtpAccount['SmtpAccount']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Host'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smtpAccount['SmtpAccount']['host']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tls'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smtpAccount['SmtpAccount']['tls']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SmtpAccount', true), array('action'=>'edit', $smtpAccount['SmtpAccount']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SmtpAccount', true), array('action'=>'delete', $smtpAccount['SmtpAccount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $smtpAccount['SmtpAccount']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SmtpAccounts', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SmtpAccount', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
