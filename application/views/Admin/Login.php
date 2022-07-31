<?php include('header.php'); ?>

<div class="container mt-3">
    <h1>Admin Login</h1>

    <?php
        if($error=$this->session->flashdata('Login_failed')):
    ?>
    <div class="alert alert-danger w-50" role="alert">
    <?php echo $error; ?>
    </div>

    <?php endif; ?>


    <?php echo form_open('admin/index'); ?>
        <div class="form-group">
            <label for="adminid">Admin ID</label>
            <?php echo form_input(['class'=>'form-control w-50', 'placeholder'=> 'Enter username', 'name'=>'aname', 'value'=>set_value('aname')]); ?>
        </div>
        <?php echo form_error('aname') ?>
        <div class="form-group">
            <label for="adminpassword">Admin Password</label>
            <!-- <input type="password" class="form-control"> -->
            <?php echo form_password(['class'=>'form-control w-50', 'type'=>'password', 'placeholder'=> 'Enter password', 'name'=>'apass', 'value'=>set_value('apass')]); ?>
        </div>
        <?php echo form_error('apass') ?>
        <div class="form-group">
            <!-- <button class="btn btn-primary">Login</button> -->
            <?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit', 'value'=>'Submit']) ?>
            <?php echo form_reset(['class'=>'btn btn-danger', 'type'=>'reset', 'value'=>'Reset']) ?>
        </div>

</div>

<?php include('footer.php'); ?>