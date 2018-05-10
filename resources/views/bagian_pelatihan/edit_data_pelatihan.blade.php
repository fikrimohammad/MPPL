
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/input_data_pengajar_lulus.css">
        <link rel="stylesheet" type="text/css" href="../css/submit_button.css">
</head>
<body>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <img src="../logo/logo.png" id="logo_IM">
                </div>
            </div>
            <hr class="medium">
        </div>



        <div class="container">

            <h4 class="text-center py-3">Edit Pelatihan</h4>

            
            <form action="input_data_pengajar_lulus_process.php" method="POST"> 
                <div class="row pb-2 justify-content-center">
                    <div class="col-sm-8 mx-5 text-center">
                        <table class="table table-hover font-weight-bold">
                            <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td scope="row"><input type="text" class="form-control" id="namaLengkap" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pelatihan</td>
                                        <td scope="row"><input type="text" class="form-control" id="namaLengkap" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal & Waktu Pelatihan</td>
                                        <td scope="row"><input type="text" class="form-control" id="namaLengkap" placeholder=""></td>
                                    </tr> 
                                    <tr>
                                        <td>Tempat Pelatihan</td>
                                        <td scope="row"><input type="text" class="form-control" id="namaLengkap" placeholder=""></td>
                                    </tr>   
                              
                            </tbody>
                        </table>
                        <div class="row justify-content-end pt-3">
                            <div class="col-sm-5">
                                <div class="row justify-content-end">
                                    <div class="col-sm-4">
                                        <button type="submit" class="text-center" id="submit_button">
                                            <img src="../logo/save.png" alt="Card image cap" style="width: 32px; height: 32px;">
                                        </button>
                                        <p class="font-weight-bold text-center">Simpan</p>    
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="text-center">
                                            <a href="jadwal_pelatihan.php"><img src="../logo/back-button.png" alt="Card image cap" style="width: 32px; height: 32px;"></a>  
                                        </div>
                                        <p class="font-weight-bold text-center pt-1">Kembali</p>    
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </form>
        </div>

        <div class="container footer navbar-fixed-bottom">
            <hr class="medium">  
                <h6 class="py-3">© 2017 Yayasan Indonesia Mengajar. Some Rights Reserved.</h6>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
