<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login - AYODONOR</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">
 
    <style>

        #o {
            height: 30vh;
            padding : 0%;
        }
        .form {
            position: relative;
            z-index: 99;
        }

        #register .form {
            width: 80%;
        }
        h1 {
            color: grey;
            font-family: PlayfairDisplay, times, serif;
            font-size: 3rem;
            z-index: 1;
        }
        .material-label{
            color: grey;
        }

        .site-header {
            background: #79101a;
        }

    </style>
</head>

<body>

        <header class="site-header js-site-header">
        <nav class="navbar navbar-expand-lg navbar-black ftco_navbar bg-transparent ftco-navbar-transparent" id="ftco-navbar">
            <div class="container">
                <img src="<?= base_url(); ?>assets/img/logo1.png" width="120" alt="aaa">
                <a class="navbar-brand" href="index.php"><h1 style="color: white;">   AYODONOR</h1></a>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="scroll nav-link" href="<?= base_url(); ?>">HOME</a>
                        </li>
                        <li class="nav-item nav-login">
                            <a class="scroll nav-link" href="<?= base_url('Home/register'); ?>">REGISTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="scroll nav-link" href="<?= base_url('Home/artikel'); ?>">ARTIKEL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="register" class="d-flex flex-column justify-content-center">
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
                <div id="o">
                    <form class="form" action="login" method="POST">
                        <label class="material-label">Email</label>
                        <div class="material-form ">
                            <input type="text" class="material-input" name="email" required>
                        </div>
                        <label class="material-label">Password</label>
                        <div class="material-form ">
                            <input type="password" class="material-input" name="password" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div class="readmore-btn">
                            <button type="submit" class="btn " style="margin-right: 15px;">LOGIN</button>
                        </div>
                    </form>
                </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>