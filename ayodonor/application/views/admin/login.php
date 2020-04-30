<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login ADMIN - AYODONOR</title>
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
            color: grey;
            font-family: PlayfairDisplay, times, serif;
            font-weight: bold;
        }
        .material-label{
            color: grey;
        }
    </style>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>assets/img/logo1.png" alt="logo" /> AYODONOR
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
                    <a class="scroll nav-link" href="<?= base_url('Home/register'); ?>">REGISTER</a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="register" class="d-flex flex-column justify-content-center">
        <div class="container">
        <div class="mesh">
            <img src="<?= base_url(); ?>assets/img/zzzz.jpg">
        </div>
        <?php
        if ($this->session->flashdata('message')) {
            echo '<div class="alert alert-dark" role="alert">
                    ', $this->session->flashdata('message'), '
                </div>';
        } ?>
        <form action="login" method="POST">
            <div>
                <h1>LOGIN <br/>
                 ADMIN</h1>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../../assets/js/main.js"></script>
    <script type="text/javascript" src="../../../assets/js/css3-animate-it.js"></script>
</body>