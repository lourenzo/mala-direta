<?php $html->addCrumb(_('Messages'),'/messages'); ?>
<?php $html->addCrumb(_('Add')); ?>
<script language="JavaScript" type="text/javascript" src="<?php echo $html->url('/js/tiny_mce/tiny_mce.js');?>"></script>


<script type="text/javascript">
    tinyMCE.init({
        theme : "simple",
        mode : "textareas",
        convert_urls : false
    });
</script>


<form action="<?php echo $html->url('/messages/add'); ?>" method="post">
<div>
    <label for="subject"><?php __('Name:');?></label>
    <?php echo $form->text('Message/name', array('size' => 20)); ?>
</div>
<div>
    <label for="subject"><?php __('Subject:');?></label>
    <?php echo $form->text('Message/subject', array('size' => 20)); ?>
</div>
<div>
    <label for="html"><?php __('HTML:');?></label>
    <?php echo $form->textarea('Message/html', array('size' => 20)); ?>
</div>
<div>
    <?php echo $form->submit(_('Add')); ?>
</div>
</form>
