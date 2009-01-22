<?php $html->addCrumb('Messages'); ?>
<h2>Messages</h2>
<?php echo $html->link(_('Add'),"/messages/add");?>


<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Subject</th>
        <th>html</th>
        <th>text</th>
        <th>actions</th>
    </tr>

   <!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($messages as $message): ?>
    <tr>
        <td><?php echo $message['Message']['id']; ?></td>
        <td><?php echo $message['Message']['name']; ?></td>
        <td><?php echo $message['Message']['subject']; ?></td>
        <td><?php echo $message['Message']['html']; ?></td>
        <td><?php echo strip_tags($message['Message']['html']); ?></td>
        <!--<td><?php echo $message['Message']['text']; ?></td>-->
        <td>
            <?php echo $html->link(_('Edit'), "/messages/edit/".$message['Message']['id']); ?>
            <?php
            	echo $html->link(
            			_('Delete'),
						"/messages/delete/{$message['Message']['id']}",
						array(),
						sprintf(_("Are you sure you want to delete this post '%s' ?"),$message['Message']['subject'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>