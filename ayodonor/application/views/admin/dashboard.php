<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - AYODONOR</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animations.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <style>

        .alert-secondary{
            color: white;
            background-color: #79101a;
        }

        html,
        body {
            height: 100%;
        }

        @media only screen and (min-width: 992px) {

            #dashboard nav {
                width: 20%;
            }

            #dashboard .dashboard-container {
                width: 80%;
                float: right;
                padding: 32px;
            }
        }

        /*dashboard*/
        .title { 
            color: black !important;
        }


        .card {
            padding: 1em;
            flex-direction: row;
            justify-content: space-between;
            margin: 0;
        }

    </style>
</head>

<body id="dashboard">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary dashboard-nav">
        <div class="mesh"></div>
        <a class="navbar-brand" href="#">
            <img src="<?= base_url() ?>assets/img/logo1.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('admin') ?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('admin/peserta') ?>">PESERTA</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('admin/pengumuman') ?>">PENGUMUMAN</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('admin/tempat_donor') ?>">TEMPAT DONOR</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AKUN
                    </a>
                    <div class="dropdown-menu dashboard-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">LOGOUT</a>
                    </div>
                </li>
                <li class="nav-item ">
                </li>
            </ul>
        </div>
    </nav>


    <div class="dashboard-container">
        <div style="min-height: 100%;padding-bottom: 5rem;">
            <div class="alert alert-secondary">
                Selamat datang, <b><?= $this->session->userdata('namaAdmin') ?></b> !
            </div>
            <div class="container">
                <div class="mt-4">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">Dashboard</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 card text-white bg-primary">
                            <h4>Total Peserta</h4>
                            <h4><?= $total ?></h4>
                        </div>
                        <div class="col-lg-3 col-md-3 card text-white bg-success">
                            <h4>Terdaftar</h4>
                            <h4><?= $terdaftar ?></h4>
                        </div>
                        <div class="col-lg-3 col-md-3 text-white bg-warning card">
                            <h4>Need Approval</h4>
                            <h4><?= $approve ?></h4>
                        </div>
                        <div class="col-lg-3 col-md-3 text-white bg-danger card">
                            <h4>Closed</h4>
                            <h4><?= $closed ?></h4>
                        </div>
                    </div>
                </div>
                <h3 class="title mt-4">Need Approval</h3>
                <hr>
                <table class="table table-hover table-responsive-sm mt-3" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peserta as $d) { ?>
                            <tr>
                                <th scope="row"><?= $d['id_donor'] ?></th>
                                <td><?= $this->Peserta->getPesertabyId($d['id_peserta'])['nama'] ?></td>
                                <td>Mendaftarkan donor di <?= strtoupper($this->Donor->getKetTempat($d['id_peserta'])['nama_tempat']) ?>, Bergolongan darah <?= strtoupper($this->Donor->getDatadonor($d['id_peserta'])['gol_darah']) ?><?= strtoupper($this->Donor->getDatadonor($d['id_peserta'])['rhesus']) ?>, mempunyai penyakit : <?= strtoupper($this->Donor->getDatadonor($d['id_peserta'])['penyakit']) ?> </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <?php
                                        if ($d['status'] == 3) {
                                            echo '<button type="button" class="btn btn-success" disabled>Approved</button>';
                                        } else {
                                            echo '<a href=' . base_url('admin/approve/') . $d['id_peserta'] . ' class="btn btn-warning">Approve</a>';
                                        }
                                        ?>

                                    </div>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <?php
                                            echo '<a href=' . base_url('admin/nonapprove/') . $d['id_peserta'] . ' text-white class="btn btn-danger">Dont Approve</a>';
                                        ?>

                                    </div>
                                </td>
                            </tr>
                        <?php
                    }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- SCRIPT HERE -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/css3-animate-it.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </script>
</body>

</html>