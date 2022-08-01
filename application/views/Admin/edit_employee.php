
<?php include('header.php'); ?>

<div class="container mt-3">
    <h1>Edit Employee</h1>

    <?php echo form_open('admin/updateemployee'); ?>

        <div class="form-group">
            <?php echo form_hidden('e_id', $data['e_id']); ?>
        </div>
        <div class="form-group">
            <label for="fname">First Name</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'text', 'placeholder'=> 'Enter First Name', 'name'=>'fname', 'value'=>set_value('fname', $data['fname'])]); ?>
        </div>
        <?php echo form_error('fname') ?>
        <div class="form-group">
            <label for="mname">Middle Name</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'text', 'placeholder'=> 'Enter Middle Name', 'name'=>'mname', 'value'=>set_value('mname', $data['mname'])]); ?>
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'text', 'placeholder'=> 'Enter Last Name', 'name'=>'lname', 'value'=>set_value('lname', $data['lname'])]); ?>
        </div>
        <?php echo form_error('lname') ?>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'date', 'name'=>'dob', 'value'=>set_value('dob', $data['dob'])]); ?>
        </div>
        <?php echo form_error('dob') ?>

        <div class="form-group">
            <label for="email">Email</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'email', 'placeholder'=> 'Enter your email', 'name'=>'email', 'value'=>set_value('email', $data['email'])]); ?>
        </div>
        <?php echo form_error('email') ?>

        <div class="form-group">
            <label for="mobile">Mobile No</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'text', 'placeholder'=> 'Enter your mobile no', 'name'=>'mobile', 'value'=>set_value('mobile', $data['mobile'])]); ?>
        </div>
        <?php echo form_error('mobile') ?>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" value="<?php echo set_value('gender'); ?>" class="form-control w-50">
                <option value="Select">Select</option>
                <option <?php if($data['gender'] == "Male"){echo "selected";} ?> value="Male">Male</option>
                <option <?php if($data['gender'] == "Female"){echo "selected";} ?> value="Female">Female</option>
                <option <?php if($data['gender'] == "Others"){echo "selected";} ?> value="Others">Others</option>
            </select>
        </div>
        <?php echo form_error('gender') ?>
        
        <div class="form-group">
            <!-- <button class="btn btn-primary">Login</button> -->
            <?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit', 'value'=>'Submit']) ?>
            <?php echo form_reset(['class'=>'btn btn-danger', 'type'=>'reset', 'value'=>'Reset']) ?>
        </div>

</div>

<?php include('footer.php'); ?>