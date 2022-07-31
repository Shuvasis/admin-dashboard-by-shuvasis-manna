<?php include('header.php'); ?>



<div class="container mt-5">
    <?php
        if($success=$this->session->flashdata('Insert_Successful')):
    ?>
    <div class="alert alert-success w-50" role="alert">
    <?php echo $success; ?>
    </div>
    <?php endif; ?>

    <?php
        if($success=$this->session->flashdata('Update_Successful')):
    ?>
    <div class="alert alert-success w-50" role="alert">
    <?php echo $success; ?>
    </div>
    <?php endif; ?>

    <?php
        if($success=$this->session->flashdata('Delete_Successful')):
    ?>
    <div class="alert alert-success w-50" role="alert">
    <?php echo $success; ?>
    </div>
    <?php endif; ?>
    
    <div style="width: 50%; position: relative; left: 25%;">
        <canvas id="myChart" height="100px;" width="200px;"></canvas>
    </div>

    

    <a href="addemployee" class="btn btn-info mb-2">Add Employee</a>
    <div>
        <table class="table responsive-table">
            <thead class="text-center">
                <tr>
                    <th>Employee Code</th>
                    <th>Full Name</th>
                    <th>DOB</th>
                    <th>Age</th>
                    <th>Email ID</th>
                    <th>Mobile No</th>
                    <th>Gender</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($data)): ?>
                <?php $sl = 0; ?>
                <?php foreach($data as $emp): ?>
                <tr>
                    <td><?= $emp->e_id; ?></td>
                    <td><?= $emp->fname." ".$emp->mname." ".$emp->lname; ?></td>
                    <td><?= $emp->dob; ?></td>
                    <td><?php
                    $dob = new DateTime($emp->dob);
        
                    $now = new DateTime();
                     
                    $difference = $now->diff($dob);
                     
                    $age = $difference->y;
                     
                    echo  $age;
                    
                    ?></td>
                    <td><?= $emp->email; ?></td>
                    <td><?= $emp->mobile; ?></td>
                    <td><?= $emp->gender; ?></td>

                    <td>

                        <form action=<?php echo base_url('admin/editemployee'); ?> method="post">
                            <input name="e_id" type="hidden" value="<?php echo $emp->e_id; ?>">
                            <input name="fname" type="hidden" value="<?php echo $emp->fname; ?>">
                            <input name="mname" type="hidden" value="<?php echo $emp->mname; ?>">
                            <input name="lname" type="hidden" value="<?php echo $emp->lname; ?>">
                            <input name="dob" type="hidden" value="<?php echo $emp->dob; ?>">
                            <input name="email" type="hidden" value="<?php echo $emp->email; ?>">
                            <input name="mobile" type="hidden" value="<?php echo $emp->mobile; ?>">
                            <input name="gender" type="hidden" value="<?php echo $emp->gender; ?>">
                            <button class="btn btn-primary" type="submit" name="submit">Edit</button>
                        </form>
                        
                    </td>
                    
                    <td>

                        <form action=<?php echo base_url('admin/deleteemployee'); ?> method="post">
                            <input name="e_id" type="hidden" value="<?php echo $emp->e_id; ?>">
                            <button class="btn btn-danger" type="submit" name="submit1">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">No Data Avilable</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
    
    
    <script>
        $( document ).ready(function() {
            console.log( "ready!" );

            const labels = [
                '<?=$bar[0]->gender?>',
                '<?=$bar[1]->gender?>',
                '<?=$bar[2]->gender?>',
                
            ];
    
            const data = {
                labels: labels,
                datasets: [{
                label: 'Gender Wise Data',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)'
                ],
                data: [
                    <?= $bar[0]->count ?>,
                    <?= $bar[1]->count ?>,
                    <?= $bar[2]->count ?>,
                ],
                }]
            };
    
            const config = {
                type: 'bar',
                data: data,
                options: {}
            };
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        });
    </script>

    <!-- <script>
        $( document ).ready(function() {
        });
    </script> -->


<?php include('footer.php'); ?>