
<?php include('header.php'); ?>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!-- <div class="container emp-profile">

    <div class="row text-center" style="margin-left: 7rem; margin-right: 7rem; margin-top: 7rem;">
        <div class="col-md-12">
            <div class="profile-head">
                <img src="https://www.pinpng.com/pngs/m/80-805308_placeholder-person-hd-png-download.png" alt="No image">
            </div>
        </div>
    </div>
    <div class="row text-center" style="margin-left: 7rem; margin-right: 7rem;">

        <div class="col-md-12">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <label>User Id</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $e_id; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Full Name</label>
                        </div>
                        <div class="col-md-6">
                            <p><?= $fname." ".$mname." ".$lname; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email</label>
                        </div>
                        <div class="col-md-6">
                            <p><?= $email; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone No</label>
                        </div>
                        <div class="col-md-6">
                            <p><?= $mobile; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>DOB</label>
                        </div>
                        <div class="col-md-6">
                            <p><?= $dob; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Gender</label>
                        </div>
                        <div class="col-md-6">
                            <p><?= $gender; ?></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>         
</div> -->

<style>
    * {
    margin: 0;
    padding: 0
}

body {
    background-color: #ccc
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}


.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}


.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}



</style>

<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
  <div class="card p-4">
    <div class=" image d-flex flex-column justify-content-center align-items-center">
      <button class="btn btn-secondary">
        <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" height="100" width="100" />
      </button>
      <span class="name mt-3"><?= $fname." ".$mname." ".$lname; ?></span>
      <span class="idd"><i class="fa-solid fa-envelope"></i> <?= $email; ?></span>
      <div class="d-flex flex-row justify-content-center align-items-center gap-2">
          <span class="idd1"><i class="fa-solid fa-mobile"></i> <?= $mobile; ?></span>
          
        </div>
          <div class="d-flex flex-row justify-content-center align-items-center mt-3">
              <span class="number"> <?= $e_id; ?></span>
      </div>
      <span class="idd"><i class="fa-solid fa-calendar-days"></i> <?= $dob; ?></span>
      <span class="idd"><i class="fa-solid fa-venus-mars"></i> <?= $gender; ?></span>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>