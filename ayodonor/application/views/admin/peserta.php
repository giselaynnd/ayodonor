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
    <link rel="stylesheet" type="text/css" href="https://schematics.its.ac.id/css/materialform.css">
    <style>
        .form {
            position: relative;
            z-index: 99;
        }

        #register .form {
            width: 80%;
        }



        #nav-tab a {
            display: flex;
            height: 50px;
            align-items: center;
            justify-content: center;
            flex: 1 1 auto;
            color: #777;
            text-decoration: none;
            font: 100% SFProBold;
            font-size: 1.5rem;
        }

        #nav-tab .active {
            border-bottom: 3px solid #a73e5c;
            color: #fff;
        }

        .nav-tabs {
            width: 60%;
            border: 0;
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



        @media only screen and (min-width: 992px) {
            #sponsor {
                margin-left: -32px;
            }

            #dashboard nav {
                width: 20%;
            }

            #dashboard .dashboard-container {
                width: 80%;
                float: right;
                padding: 32px;
            }
        }

        .event {
            padding: 0 !important;
        }

        .title {
            color: black !important;
        }

        .subtitle {
            font-family: SFProRegular;
            font-size: .7em;
        }

        #header {
            height: unset;
            background: white;
            padding: 0;
        }

        .nama {
            font-size: 1.1rem;
        }

        ul.info {
            list-style-type: none;
            padding-left: 16px;
        }

        p {
            color: black !important;
        }

        .bukalapak {
            color: black !important;
            padding-left: 0.5rem !important;
            display: inline-block !important;
        }

        .bukalapak img {
            height: 3rem;
            margin-left: 6px;
        }

        .npclogo {
            display: inline-block;
        }

        .center {
            text-align: center;
        }

        .card {
            padding: 1em;
            flex-direction: row;
            justify-content: space-between;
            margin: 0;
        }

        .card>h4 {
            margin: 0;
        }
    </style>
</head>

<body id="dashboard">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary dashboard-nav">
        <div class="mesh"></div>
        <!-- <a class="navbar-brand" href="#">
            <img src="<?= base_url() ?>assets/img/outerfest_logo_sml.png" alt="logo">
        </a> -->
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AKUN
                    </a>
                    <div class="dropdown-menu dashboard-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ganti Password</a>
                        <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">Logout</a>
                    </div>
                </li>
                <li class="nav-item ">
                </li>
            </ul>
        </div>
    </nav>
    <!-- end head -->
    <!-- start body -->

     <div class="dashboard-container">
        <div style="min-height: 100%;padding-bottom: 5rem;">
            <div class="alert alert-secondary">
                Selamat datang, <b><?= $this->session->userdata('namaAdmin') ?></b> !
            </div>
            <div class="container">
                <div class="mt-4">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">Daftar Peserta</h3>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Find ur girlfriends" aria-label="Find ur girlfriends" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                    </div>
                </div> -->
                <table class="table table-hover table-responsive-sm mt-3" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Email</th>
                            <th scope="col">No hp</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($peserta as $d) { ?>
                            <tr>
                                <th scope="row"><?= $d['id_peserta'] ?></th>
                                <td><?= $d['nama'] ?></td>
                                <td><?= $d['instansi'] ?></td>
                                <td><?= $d['email'] ?></td>
                                <td><?= $d['noHP'] ?></td>
                                <td><?= $d['status'] ?></td>
                                <td>
                                    <a href="<?= base_url('admin/hapusPeserta') ?>/<?= $d['id_peserta'] ?>" class="btn btn-danger">Delete</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPeserta" data-nama="<?= $d['nama'] ?>" data-id="<?= $d['id_peserta'] ?>" data-instansi="<?= $d['instansi'] ?>"data-email="<?= $d['email'] ?>" data-noHP="<?= $d['noHP'] ?>" data-status="<?= $d['status'] ?>" >Edit</button>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- Modal -->
    <div class="modal fade" id="editPeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="pengumumanEdit" action="editPengumuman" method="POST">
                        <div class="form-group">
                            <label for="judul">id_peserta</label>
                            <input type="text" name="id_peserta" class="form-control" id="id_peserta" value="<?= $d['id_peserta'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="title" class="form-control" id="judul" placeholder="Judul pengumuman" >
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="description" id="deskripsi" rows="3" placeholder="Deskripsi pengumuman" ></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" form="pengumumanEdit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end main -->
    <!-- start footer -->

    <!-- end footer -->
    <!-- SCRIPT HERE -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/css3-animate-it.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>