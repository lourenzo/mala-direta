<div class="subscriberGroupItems index">
<h2><?php __('SubscriberGroupItems');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('subscriber_group_id');?></th>
	<th><?php echo $paginator->sort('subscriber_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($subscriberGroupItems as $subscriberGroupItem):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subscriberGroupItem['SubscriberGroupItem']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($subscriberGroupItem['SubscriberGroup']['name'], array('controller'=> 'subscriber_groups', 'action'=>'view', $subscriberGroupItem['SubscriberGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($subscriberGroupItem['Subscriber']['name'], array('controller'=> 'subscribers', 'action'=>'view', $subscriberGroupItem['Subscriber']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $subscriberGroupItem['SubscriberGroupItem']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $subscriberGroupItem['SubscriberGroupItem']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $subscriberGroupItem['SubscriberGroupItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscriberGroupItem['SubscriberGroupItem']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New SubscriberGroupItem', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Subscriber Groups', true), array('controller'=> 'subscriber_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Subscriber Group', true), array('controller'=> 'subscriber_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Subscribers', true), array('controller'=> 'subscribers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Subscriber', true), array('controller'=> 'subscribers', 'action'=>'add')); ?> </li>
	</ul>
</div>
