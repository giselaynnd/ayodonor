<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Peserta - AYODONOR</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animations.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <style>
        .alert-secondary {
            background-color: #79101a;
            color: white;
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


        .title {
            color: black !important;
        }

    </style>
</head>

<!-- navbar -->

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

<!-- container -->

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
<!-- table -->
                <table class="table table-hover table-striped table-responsive-sm mt-3" id="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Telp</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($peserta as $d) { ?>
                            <tr>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="pesertaEdit" action="<?= base_url('admin/editPeserta') ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="instansi">Instansi</label>
                            <input type="text" name="instansi" class="form-control" id="instansi" placeholder="instansi" value="">
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal</label>
                            <input type="text" name="asal" class="form-control" id="asal" placeholder="asal" value="">
                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomor Telp</label>
                            <input type="text" name="nohp" class="form-control" id="nohp" placeholder="nohp" value="">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="1">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <input type="hidden" id="id_peserta" name="id_peserta" value="">
                        <input type="hidden" id="status" name="status" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" form="pesertaEdit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/css3-animate-it.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">

// dataTables
            $(document).ready(function() {
            // $('#ex1').zoom();
            $('#table').DataTable();
        })
            $('#editPeserta').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_peserta = button.data('id') // Extract info from data-* attributes
            var nama = button.data('nama') // Extract info from data-* attributes
            var email = button.data('email')
            var instansi = button.data('instansi')
            var asal = button.data('asal')
            var nohp = button.data('nohp')
            var status = button.data('status') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body #id_peserta').attr('value', id_peserta)
            modal.find('.modal-body #nama').val(nama)
            modal.find('.modal-body #email').val(email)
            modal.find('.modal-body #instansi').val(instansi)
            modal.find('.modal-body #asal').val(asal)
            modal.find('.modal-body #nohp').val(nohp)
            modal.find('.modal-body #status').val(status)
        })
    </script>

</body>

</html>