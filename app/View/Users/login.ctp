<div class="users form col-md-12 text-center">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('LOGIN'); ?>
        </legend>
        <?php echo $this->Form->input('username', array('between'=>'<br />', 'div' => "form-group"));
        echo $this->Form->input('password', array('between'=>'<br />', 'div' => "form-group"));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'), array('class' => 'btn btn-default')); ?>
</div>