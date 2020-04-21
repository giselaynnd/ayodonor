<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Daerah - ayodonor</title>

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/');?>js/jquery.js"></script>
    <script src="<?= base_url('assets/');?>js/bootstrap.bundle.min.js"></script>

</head>

<body class="h-100 bg-light">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-5">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Pilih Daerah</h1>
                        </div>
                        
                        <?= $this->session->flashdata('message'); ?>

                        <form action="<?= base_url('auth');?>" method="post">
                            <div class="text-center">
                                <select name="daerah_input" class="dropdown" id="daerah_id">
                                    <option value="" selected>----Pilih----</option>
                                    <option value="bandung">Bandung</option>
                                    <option value="jakarta">Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success form-control mt-2">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
