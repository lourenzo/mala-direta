<div class="actions view">
<h2><?php  __('Action');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $action['Action']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $action['Action']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('About'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $action['Action']['about']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Action', true), array('action'=>'edit', $action['Action']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Action', true), array('action'=>'delete', $action['Action']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $action['Action']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Actions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Action', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
