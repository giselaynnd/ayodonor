<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pengumuman - AYODONOR</title>
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

<body id="dashboard">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary dashboard-nav">
        <div class="mesh"></div>
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>assets/img/logo1.png" alt="logo">
            </a>    
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
                            <h3 class="title">Pengumuman</h3>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-success mr-2" data-toggle="modal" data-target="#tambahPengumuman">Tambah Pengumuman</button>
                </div>
                <table class="table table-hover table-responsive-sm mt-3" id="table">
                    <thead>
                        <tr>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Admin</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($pengumuman as $d) { ?>
                            <tr>
                                <td><?= $d['title'] ?></td>
                                <td><?= $d['description'] ?></td>
                                <td><?= $d['date_created'] ?></td>
                                <td><?= $this->Admins->getAdminById($d['id_admin'])['nama'] ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editPengumuman" data-title="<?= $d['title'] ?>" data-id="<?= $d['id_pengumuman'] ?>" data-desc="<?= $d['description'] ?>">Edit</button>
                                        <a href="<?= base_url('admin/hapusPengumuman') ?>/<?= $d['id_pengumuman'] ?>" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
                <br>
                <div class="text-center">© <?php echo date('Y'); ?> Copyright:
                    <a href="#"> AyoDonor.com</a>
                 </div>

            </div>
        </div>
    </div>
    <!-- Modal -->

   <div class="modal fade" id="tambahPengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pengumuman Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="pengumumanBaru" action="addPengumuman" method="POST">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="title" class="form-control" id="judul" placeholder="Judul pengumuman">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="description" id="deskripsi" rows="3" placeholder="Deskripsi pengumuman"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" form="pengumumanBaru" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="modal fade" id="editPengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah pengumuman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="pengumumanEdit" action="editPengumuman" method="POST">
                        <input type="hidden" id="id_pengumuman" name="id_pengumuman">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="title" class="form-control" id="judul" placeholder="Judul pengumuman" value="<?= $d['title']?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="description" id="deskripsi" rows="3" placeholder="Deskripsi pengumuman" ><?= $d['description']?></textarea>
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


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/css3-animate-it.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
     <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
        $('#editPengumuman').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('title') // Extract info from data-* attributes
            var id = button.data('id')
            var desc = button.data('desc') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            // console.log(id)
            modal.find('.modal-body #id_pengumuman').attr('value', id)
            modal.find('.modal-body #judul').val(title)
            modal.find('.modal-body #deskripsi').val(desc)
        })
    </script>

</body>

</html>