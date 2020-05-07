<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form Donor - AyoDonor</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">
    <style>

        h1, .h1 {
            font-family: PlayfairDisplay;
            
        }
        .form {
            position: relative;
            z-index: 99;
        }
        html,
        body {
            height: 100%;
        }

        .dashboard-container {
            min-height: 100%;
            position: relative;
            padding-bottom: 0 !important;
        }
        .event {
            padding: 1 !important;
        }

        .btn {
            color: white;
            background-color: black;
        }
    </style>
</head>

<!-- navbar -->

<body id="dashboard">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary dashboard-nav">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>assets/img/logo1.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url(); ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('user'); ?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('user'); ?>/pengumuman">PENGUMUMAN</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('user'); ?>/daftarDonor">DAFTAR DONOR</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AKUN
                    </a>
                    <div class="dropdown-menu dashboard-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('user'); ?>/ganti_password">Ganti Password</a>
                        <a class="dropdown-item" href="<?= base_url('user'); ?>/logout">Logout</a>
                    </div>
                </li>
                <li class="nav-item ">

                </li>
            </ul>
        </div>
    </nav>

<!-- container -->

    <div class="dashboard-container">
        <h1>Register</h1>
        <br>
        <form class="form" action="<?= base_url('user');?>/registDonor/<?=$id_tempat.'/'.$loggedin['id_peserta']; ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">

    <!-- basic table -->
    
            <table border="0" width="120">
                <tr>
                    <td>Golongan Darah</td>
                    <td width="900"><input type="text" class="text-field" name="golonganDarah" value="<?= set_value('golDarah'); ?>" required></td> 
                </tr>
                <tr>
                    <td>Rhesus</td>
                    <td><input type="text" class="material-input" name="rhesus" value="<?= set_value('rhesus'); ?>" required>
                        </td>                                 
                </tr>
                <tr>
                    <td>Riwayat Penyakit</td>
                    <td><input type="text" class="material-input" name="penyakit" value="<?= set_value('penyakit'); ?>" required></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn">REGISTER</button></td>
                </tr>
            </table>
            </form>
        <br>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>