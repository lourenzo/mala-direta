<div class="mtsLogs index">
<h2><?php __('MtsLogs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('mail_transmission_schedule_id');?></th>
	<th><?php echo $paginator->sort('subscriber_id');?></th>
	<th><?php echo $paginator->sort('status');?></th>
	<th><?php echo $paginator->sort('about');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($mtsLogs as $mtsLog):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $mtsLog['MtsLog']['id']; ?>
		</td>
		<td>
			<?php echo $mtsLog['MtsLog']['mail_transmission_schedule_id']; ?>
		</td>
		<td>
			<?php echo $mtsLog['MtsLog']['subscriber_id']; ?>
		</td>
		<td>
			<?php echo $mtsLog['MtsLog']['status']; ?>
		</td>
		<td>
			<?php echo $mtsLog['MtsLog']['about']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $mtsLog['MtsLog']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $mtsLog['MtsLog']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $mtsLog['MtsLog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mtsLog['MtsLog']['id'])); ?>
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
		<li><?php echo $html->link(__('New MtsLog', true), array('action'=>'add')); ?></li>
	</ul>
</div>
