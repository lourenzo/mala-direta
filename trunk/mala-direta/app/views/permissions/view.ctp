<div class="permissions view">
<h2><?php  __('Permission');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $permission['Permission']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $permission['Permission']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Action Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $permission['Permission']['action_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Permission', true), array('action'=>'edit', $permission['Permission']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Permission', true), array('action'=>'delete', $permission['Permission']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $permission['Permission']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Permissions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Permission', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
