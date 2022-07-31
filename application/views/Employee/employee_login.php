<?php include('header.php'); ?>

<div class="container mt-3">
    <h1>Employee Login</h1>

    <?php
        if($error=$this->session->flashdata('Login_failed')):
    ?>
    <div class="alert alert-danger w-50" role="alert">
    <?php echo $error; ?>
    </div>

    <?php endif; ?>


    <?php echo form_open('logincheck'); ?>
        <div class="form-group">
            <label>Employee ID</label>
            <?php echo form_input(['class'=>'form-control w-50', 'placeholder'=> 'Enter username', 'name'=>'ename', 'value'=>set_value('ename')]); ?>
        </div>

        <div class="form-group">
            <label>Employee Password</label>
            <!-- <input type="password" class="form-control"> -->
            <?php echo form_password(['class'=>'form-control w-50', 'type'=>'password', 'placeholder'=> 'Enter phone number', 'name'=>'epass', 'value'=>set_value('epass')]); ?>
        </div>

        <div class="form-group">
            <!-- <button class="btn btn-primary">Login</button> -->
            <?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit', 'name'=>'submit', 'value'=>'Submit']) ?>
            <?php echo form_reset(['class'=>'btn btn-danger', 'type'=>'reset', 'value'=>'Reset']) ?>
        </div>

</div>

<?php include('footer.php'); ?>