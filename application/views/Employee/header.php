<html>
    <head>
        <title>Employee Details</title>
        <link rel="stylesheet" href="<?= base_url("Assets/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Employee Panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                if($this->session->userdata('e_id'))
                {
                    ?>
                    <ul style="list-style-type: none;">
                        <li><a href="<?= base_url('logout'); ?>" class="btn btn-danger">Logout</a></li>
                    </ul>
                    
                    <?php
                }
                ?>
                
            </div>
        </nav>