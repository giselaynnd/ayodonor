<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - AyoDonor</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">
    <style>
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

    </style>
</head>

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

    <div class="dashboard-container">
        <h1>Register</h1>
            <form class="form" action="<?= base_url('user');?>/registDonor/<?=$id_tempat.'/'.$loggedin['id_peserta']; ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                <div class="material-form">
                    <input type="text" class="material-input" name="golonganDarah" value="<?= set_value('golDarah'); ?>" required>
                    <label class="material-label">Golongan Darah</label>
                </div>
                <div class="material-form">
                    <input type="text" class="material-input" name="rhesus" value="<?= set_value('rhesus'); ?>" required>
                    <label class="material-label">Rhesus</label>
                </div>
                <div class="material-form">
                    <input type="text" class="material-input" name="penyakit" value="<?= set_value('penyakit'); ?>" required>
                    <label class="material-label">Riwayat Penyakit</label>
                </div> 
                <button type="submit" class="btn event btn-secondary">Register</button>
            </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>