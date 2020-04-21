<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login - AYO DONOR</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">
    <link rel="stylesheet" type="text/css" href="https://schematics.its.ac.id/css/materialform.css">
    <style>
        .form {
            position: relative;
            z-index: 99;
        }

        #register .form {
            width: 80%;
        }
        h1{
            color: white;
        }
        .material-label{
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>logo1.png" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url(); ?>">HOME</a>
                </li>
                <li class="nav-item nav-login">
                    <a class="scroll nav-link" href="<?= base_url('Home/register_npc'); ?>">REGISTER</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end head -->
    <!-- start body -->
    <section id="register" class="d-flex flex-column justify-content-center">
        <div class="mesh"></div>
        <?php
        if ($this->session->flashdata('SuccessReg')) {
            echo '<div class="alert alert-dark" role="alert">
                Pendaftaran berhasil
            </div>';
        }
        if ($this->session->flashdata('message')) {
            echo '<div class="alert alert-dark" role="alert">
                ', $this->session->flashdata('message'), '
            </div>';
        }
        ?>
        <div class="form">
            <div>
                <h1>LOGIN</h1>
            </div>
                <div id="loginnpc">
                    <form class="form" action="login" method="POST">
                        <label class="material-label">Email</label>
                        <div class="material-form ">
                            <input type="text" class="material-input" name="email" required>
                        </div>
                        <label class="material-label">Password</label>
                        <div class="material-form ">
                            <input type="password" class="material-input" name="password" required>
                        </div>
                        <button type="submit" class="btn event btn-npc">Login</button>
                    </form>
                </div>
        </div>
    </section>
    <!-- end main -->
    <!-- start footer -->
    <!-- SCRIPT HERE -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>