<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register </title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">

    <style>

        .form {
            position: relative;
            z-index: 99;
        }

        #register .form {
            width: 70%;
        }

        h1 {
            color: grey;
            font-family: PlayfairDisplay, times, serif;
            font-size: 3rem;
            z-index: 1;
        }
       
        .form-control {
            background-color: transparent !important;
        }
    </style>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>assets/img/logo1.png" alt="logo" />
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
                    <a class="scroll nav-link" href="<?= base_url('home/login'); ?>">
                        LOGIN
                    </a>
                </li>
            </ul>
        </div>
    </nav>
   
    <section id="register" class="animatedParent d-flex flex-column justify-content-center">
        <div class="mesh">
            <img src="<?= base_url(); ?>assets/img/zzzz.jpg">
        </div>
        <div class="form-container animated fadeInUpShort">
            <?php
            if ($this->session->flashdata('SuccessReg')) {
                echo '<div class="alert alert-dark" role="alert">
                    ', $this->session->flashdata('SuccessReg'), '
                </div>';
            } ?>
            <h1>Register</h1>
            <form class="form" action="register" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
            <table border="0" width="120">
                <tr>
                    <td>Nama</td>
                    <td width="900"><input type="text" class="text-field" name="nama" value="<?= set_value('nama'); ?>" required></td> 
                </tr>
                <tr>
                    <td>Sekolah/Instansi</td>
                    <td><input type="text" class="material-input" name="instansi" value="<?= set_value('instansi'); ?>" required>
                        </td>                                 
                </tr>
                <tr>
                    <td>Asal Daerah</td>
                    <td><input type="text" class="material-input" name="asal" value="<?= set_value('asal'); ?>" required></td>
                </tr>
                <tr>
                    <td>No. HP</td>

                    <td><input type="text" class="material-input" name="nohp" value="<?= set_value('nohp'); ?>" required></td>   
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="material-input" name="email" value="<?= set_value('email'); ?>" required></td>  
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="material-input" name="password" required></td>                  
                </tr>
                <tr>
                    <td>Re-type password</td>
                    <td><input type="password" class="material-input" name="re-password" required></td>
                    
                </tr>
                
                    <td><button type="submit" class="btn event btn-npc">Register</button></td>
  
            </table>
            </form>
        </div>
    </section>
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>