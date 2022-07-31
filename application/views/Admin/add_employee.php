<?php include('header.php'); ?>

<div class="container mt-3">
    <h1>Add Employee</h1>

    <?php $current_year = date("Y"); 
    // echo $current_year;
    $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                     .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'); // and any other characters
    shuffle($seed); // probably optional since array_is randomized; this may be redundant
    $rand = '';
    foreach (array_rand($seed, 3) as $k) :
    $rand .= $seed[$k];
    endforeach;
    // echo $rand."<br>";

    $DigitRandomNumber = mt_rand(0000001,9999999);
    // echo $DigitRandomNumber;

    $final_emp_code = "WB/EMP/".$current_year.$rand.$DigitRandomNumber;
    // echo $final_emp_code;
    // exit;
    ?>
    


    <?php echo form_open('admin/employeeValidation'); ?>

        <div class="form-group">
            <?php echo form_hidden('e_id', $final_emp_code); ?>
        </div>
        <div class="form-group">
            <label for="fname">First Name</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'text', 'placeholder'=> 'Enter First Name', 'name'=>'fname', 'value'=>set_value('fname')]); ?>
        </div>
        <?php echo form_error('fname') ?>
        <div class="form-group">
            <label for="mname">Middle Name</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'text', 'placeholder'=> 'Enter Middle Name', 'name'=>'mname', 'value'=>set_value('mname')]); ?>
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'text', 'placeholder'=> 'Enter Last Name', 'name'=>'lname', 'value'=>set_value('lname')]); ?>
        </div>
        <?php echo form_error('lname') ?>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'date', 'name'=>'dob', 'value'=>set_value('dob')]); ?>
        </div>
        <?php echo form_error('dob') ?>

        <div class="form-group">
            <label for="email">Email</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'email', 'placeholder'=> 'Enter your email', 'name'=>'email', 'value'=>set_value('email')]); ?>
        </div>
        <?php echo form_error('email') ?>

        <div class="form-group">
            <label for="mobile">Mobile No</label>
            <?php echo form_input(['class'=>'form-control w-50', 'type'=>'text', 'placeholder'=> 'Enter your mobile no', 'name'=>'mobile', 'value'=>set_value('mobile')]); ?>
        </div>
        <?php echo form_error('mobile') ?>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control w-50">
                <option value=""selected="true" disabled="disabled"> --Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <?php echo form_error('gender') ?>
        
        <div class="form-group">
            <!-- <button class="btn btn-primary">Login</button> -->
            <?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit', 'value'=>'Submit']) ?>
            
        </div>

</div>

<?php include('footer.php'); ?>