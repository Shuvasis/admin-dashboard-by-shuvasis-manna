<html>
    <head>
        <title>Employee Details</title>
        <link rel="stylesheet" href="<?= base_url("Assets/css/bootstrap.min.css"); ?>">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                if($this->session->userdata('a_id'))
                {
                    ?>
                    <ul class="list-style-type: none;">
                        <li><a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger">Logout</a></li>
                    </ul>
                    
                    <?php
                }
                ?>
            </div>
        </nav>