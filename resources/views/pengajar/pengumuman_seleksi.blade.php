<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/button.css">
</head>
<body>
	
		<header class="container">
			<div class="row justify-content-center">
				<div class="col-md-auto">
					<img src="../logo/logo.png" id="logo_IM">
				</div>
			</div>
			<hr class="medium">
		</header>



		<div class="container">

			<h4 class="text-center py-3">PENGUMUMAN SELEKSI PENGAJAR</h4>
			<form action="pengumuman_pengajar_process.php" method="POST">
				<div class="row justify-content-center pt-5 pb-4">
					<div class="col-sm-10 mx-5">
						<div class="row pt-4">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="idPengajar">Masukkan ID Pengajar Anda</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="idPengajar" placeholder="">    
                                        </div>  
                                </div>
                            </div>
                        </div>
					</div>	
			    </div>		
			 	<div class="row justify-content-center">
			 		<div>
						<button type="submit" class="btn btn-submit">Lihat Hasil</button>	
					</div>
					<div class="pl-2">
                        <a class="btn btn-cancel" href="../menu_pengajar.php" role="button">Kembali Ke Beranda</a>   
                    </div>
				</div>		
			</form>

			<div class="row justify-content-center pt-5">
				<p>Jika peserta lulus akan memuat page <a href="lulus.php">ini</a></p>
			</div>
			<div class="row justify-content-center pt-2 pb-3">
				<p>Jika peserta tidak lulus akan memuat page <a href="tidaklulus.php">ini</a></p>
			</div>	
		</div>

		<footer class="container footer navbar-fixed-bottom" style="height: 100px;">
			<hr class="medium">	
				<h6 class="py-3">© 2017 Yayasan Indonesia Mengajar. Some Rights Reserved.</h6>
		</footer>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>
