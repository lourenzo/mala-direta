<div class="subscribers view">
<h2><?php  __('Subscriber');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('About'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['about']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Subscriber', true), array('action'=>'edit', $subscriber['Subscriber']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Subscriber', true), array('action'=>'delete', $subscriber['Subscriber']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscriber['Subscriber']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Subscribers', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Subscriber', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
