<?php if ($error): ?>
<p>The login credentials you supplied could not be recognized. Please try again.</p>
<?php endif; ?>

<form action="<?php echo $html->url('/users/login'); ?>" method="post">
<div>
    <label for="email"><?php __('E-Mail:');?></label>
    <?php echo $form->text('User/email', array('size' => 20)); ?>
</div>
<div>
    <label for="password"><?php __('Password:');?></label>
    <?php echo $form->password('User/password', array('size' => 20)); ?>
</div>
<div>
    <?php echo $form->submit(_('Login')); ?>
</div>
</form>