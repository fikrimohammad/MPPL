<!DOCTYPE HTML>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/button.css">
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

        <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tab_pengajar" data-toggle="pill" href="#tab_pengajar_content" role="tab" aria-controls="tab_pengajar_content" aria-selected="true">Pengajar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab_donatur" data-toggle="pill" href="#tab_donatur_content" role="tab" aria-controls="tab_donatur_content" aria-selected="false">Donatur</a>
            </li>
        </ul>
        
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="tab_pengajar_content" role="tabpanel" aria-labelledby="tab_pengajar">
                <div class="container">
                
                    <h4 class="text-center py-3">HALAMAN LOGIN PENGAJAR</h4>
                    
                    <form>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 ">
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="emailPengajar">Email</label>
                                                <div class="col-sm-8 offset-sm-1">
                                                    <input type="text" class="form-control" id="emailPengajar" placeholder="">    
                                                </div>  
                                        </div>
                                    </div>
                                </div>             
                                <div class="row justify-content-center py-2">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="passwordPengajar">Password</label>
                                                <div class="col-md-8 offset-md-1">
                                                    <input type="text" class="form-control" id="passwordPengajar" placeholder=""> 
                                                </div>  
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row justify-content-center pt-3 pb-5">
                            <div>
                                <button type="submit" class="btn btn-submit">Login</button>   
                            </div>  
                            <div class="pl-2">
                                <a class="btn btn-cancel" href="../index.html" role="button">Kembali Ke Beranda</a>   
                            </div>
                        </div>  
                    </form>
                </div>    

            </div>
            <div class="tab-pane fade" id="tab_donatur_content" role="tabpanel" aria-labelledby="tab_donatur">
                <div class="container">
                    
                    <h4 class="text-center py-3">HALAMAN LOGIN DONATUR</h4>
                    
                    <form>
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="emailDonatur">Email</label>
                                                <div class="col-sm-8 offset-sm-1">
                                                    <input type="text" class="form-control" id="emailDonatur" placeholder="">    
                                                </div>  
                                        </div>
                                    </div>
                                </div>             
                                <div class="row justify-content-center py-2">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="passwordDonatur">Password</label>
                                                <div class="col-md-8 offset-md-1">
                                                    <input type="text" class="form-control" id="passwordDonatur" placeholder=""> 
                                                </div>  
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row justify-content-center pt-3 pb-5">
                            <div>
                                <button type="submit" class="btn btn-submit">Login</button>   
                            </div>  
                            <div class="pl-2">
                                <a class="btn btn-cancel" href="../index.html" role="button">Kembali Ke Beranda</a>   
                            </div>
                        </div>  
                    </form>
                </div>     
            </div>
        </div>

        <div class="row justify-content-center pt-5">
            <p>Jika berhasil login untuk donatur akan memuat page <a href="menu_donatur.php">ini</a></p>
        </div>
        <div class="row justify-content-center pt-2 pb-3">
            <p>Jika berhasil login untuk pengajar akan memuat page <a href="menu_pengajar.php">ini</a></p>
        </div>

        <footer class="container footer navbar-fixed-bottom pt-3" style="height: 100px;">
            <hr class="medium"> 
                <h6 class="py-3">© 2017 Yayasan Indonesia Mengajar. Some Rights Reserved.</h6>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>        
        