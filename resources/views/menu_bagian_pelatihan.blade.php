<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
	
		<header class="container">
			<div class="row justify-content-center">
				<div class="col-md-auto">
					<img src="logo/logo.png" id="logo_IM">
				</div>
			</div>
			<hr class="medium">
		</header>



		<div class="container">
			
			<h4 class="text-center pt-3 pb-4">MENU BAGIAN PELATIHAN</h4>
			
			<div class="row py-5 justify-content-center">
				<div class="col-sm-3">
					<div class="text-center">
						<a href="{{ route('jadwal_pelatihan.index') }}"><img class="card-img-top" src="logo/calendar.png" alt="Card image cap" style="width: 128px; height: 128px;"></a>
					</div>

					<h4 class="text-center pt-4">Jadwal Pelatihan</h4>
				</div>
				<div class="col-sm-3">
					<div class="text-center">
						<a href="{{ route('materi_pelatihan.index') }}"><img class="card-img-top" src="logo/folder.png" alt="Card image cap" style="width: 128px; height: 128px;"></a>
					</div>
					<h4 class="text-center pt-4">Materi Pelatihan</h4>
				</div>
				<div class="col-sm-3">
					<div class="text-center">
						<a href="login_page_pegawai.php"><img class="card-img-top" src="logo/back-button.png" alt="Card image cap" style="width: 128px; height: 128px;"></a>
					</div>
					<h4 class="text-center pt-4">Keluar</h4>
				</div>				
			</div>
		</div>
			
		<footer class="container footer navbar-fixed-bottom" style="height: 100px;">
			<hr class="large">	
				<h6 class="py-3">© 2017 Yayasan Indonesia Mengajar. Some Rights Reserved.</h6>
		</footer>












		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>