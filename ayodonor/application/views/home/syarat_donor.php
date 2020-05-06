<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Syarat Donor - AYODONOR</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">
	
	<style>
		.site-header {
			background-color: #79101a;
			position: fixed;
			top: 0;
			position: fixed;
			width: 100%;
			z-index: 20;
		}


        #tulisan .title {
        	font-family: PlayfairDisplay;
        	text-align: center;
        }
	</style>
</head>

<body>

	<header class="site-header js-site-header">
		<nav class="navbar navbar-expand-lg navbar-black ftco_navbar bg-transparent ftco-navbar-transparent" id="ftco-navbar">
			<div class="container">
				<img src="<?= base_url(); ?>assets/img/logo1.png" width="120" alt="aaa">
				<a class="navbar-brand" href="index.php"><h1 style="color: white;">   AYODONOR</h1></a>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="scroll nav-link" href="<?= base_url(); ?>">HOME</a>
						</li>
						<li class="nav-item nav-login">
							<a class="scroll nav-link" href="<?= base_url('Home/login'); ?>">
								<?php
								if ($this->session->userdata('email')) {
									echo "DASHBOARD";
								} else
									echo "LOGIN";
								?>
							</a>
						</li>
						
						<li class="nav-item">
                            <a class="scroll nav-link" href="<?= base_url('Home/artikel'); ?>">ARTIKEL</a>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	

	<div class="main-container">
		<div class="title-tag-container">
			<h1 id="post-title">Apa Saja Syarat Donor Darah?</h1>
		</div>
		<div class="post-detail-container">
			<p>Donor darah merupakan kegiatan ketika Anda bersedia memberikan darah kepada seseorang secara sukarela. Darah Anda bisa sangat berarti bagi mereka yang membutuhkan banyak darah saat operasi, terluka, atau memiliki penyakit tertentu, seperti anemia, leukimia, atau thalasemia</p>
		</div>
	</div>
	

</body>

<!--START FOOTER-->

    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">Tentang Kami</a></li>
              
              <li><a href="#">Syarat & ketentuan</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
        
              <li><a href="#">Tentang kami</a></li>
              <li><a href="#">Hubungi kami</a></li>
              
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
            <p><span class="iconify" data-icon="ic:baseline-location-on" data-inline="false"></span>Alamat:</span> <span> <br>  Bandung</span></p>
            <p><span class="iconify" data-icon="twemoji:telephone-receiver" data-inline="false"></span>Telepon:</span> <span> <br>  (+1) 435 3533</span></p>
            <p><span class="iconify" data-icon="ion-ios-mail" data-inline="false"></span> Email:</span> <span> ayodonor@domain.com</span></p>
          </div>
         
            </form>
          </div>
        </div>
        <div class="row pt-5">
          <p class="col-md-6 text-center">
           
            AyoDonor &copy;<script>document.write(new Date().getFullYear());</script>  <i class="icon-heart-o" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank" ></a>
            
          </p>
        
        </div>
      </div>
    </footer>

<!--END FOOTER-->

	<!-- SCRIPT HERE -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?= base_url(); ?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>