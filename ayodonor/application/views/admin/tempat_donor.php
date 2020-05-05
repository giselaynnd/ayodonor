<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tempat Donor - AYODONOR</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animations.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://schematics.its.ac.id/css/materialform.css">
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
                        <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">Logout</a>
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
                Selamat datang, <b><?= $this->session->userdata('namaAdmin')?></b> !
            </div>
            <div class="container">
                <div class="mt-4">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">Tempat Donor</h3>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-success mr-2" data-toggle="modal" data-target="#tambahTempatDonor">Tempat Donor Baru</button>
                </div>
                <table class="table table-hover table-responsive-sm mt-3" id="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Tempat</th>
                            <th scope="col">Alamat Tempat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tempat_donor as $d) { ?>
                            <tr>
                                <td><?= $d['nama_tempat'] ?></td>
                                <td><?= $d['alamat_tempat'] ?></td>
                                <td><?= $d['status'] ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-id="<?= $d['id_tempat'] ?>" data-target="#editTempatDonor" data-nama="<?= $d['nama_tempat'] ?>" data-alamat="<?= $d['alamat_tempat'] ?>" data-status="<?= $d['status'] ?>">Edit</button>
                                        <a href="<?= base_url('admin/hapusTempatDonor') ?>/<?= $d['id_tempat'] ?>" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->

   <div class="modal fade" id="tambahTempatDonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tempat Donor Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="TempatDonorBaru" action="addTempatDonor" method="POST">
                        <div class="form-group">
                            <label for="nama_tempat">Nama Tempat</label>
                            <input type="text" name="nama_tempat" class="form-control" id="nama_tempat" placeholder="Nama Tempat">
                        </div>
                        <div class="form-group">
                            <label for="alamat_tempat">Alamat Tempat</label>
                            <input type="text" name="alamat_tempat" class="form-control" id="alamat_tempat" placeholder="Alamat Tempat">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" id="status" placeholder="Status">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" form="TempatDonorBaru" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="modal fade" id="editTempatDonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Tempat Donor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="TempatDonorEdit" action="editTempatDonor" method="POST">
                        <input type="hidden" id="id_tempat" name="id_tempat">
                        <div class="form-group">
                            <label for="nama">Nama Tempat</label>
                            <input type="text" name="nama" class="form-control" id="nama_tempat" placeholder="Nama Tempat">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Tempat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat_tempat" placeholder="Alamat Tempat">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" form="TempatDonorEdit" class="btn btn-primary">Simpan</button>
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
     <script>
        $(document).ready(function() {
            $('#table').DataTable();  //jquery
        });
        $('#editTempatDonor').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var nama = button.data('nama') // Extract info from data-* attributes
            var id = button.data('id')
            var alamat = button.data('alamat')
            var status = button.data('status') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            // console.log(id)
            modal.find('.modal-body #id_tempat').attr('value', id)
            modal.find('.modal-body #nama_tempat').val(nama)
            modal.find('.modal-body #alamat_tempat').val(alamat)
            modal.find('.modal-body #status').val(status)
        })
    </script>

</body>

</html>