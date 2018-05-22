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
        
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="tab_pengajar_content" role="tabpanel" aria-labelledby="tab_pengajar">
                <div class="container">
                
                    <h4 class="text-center py-3">FORM REGISTRASI PENGAJAR</h4>
                    
                    <form method="post" action="{{route('registerPengajar')}}">
                        <div class="row">
                            <div class="col-sm-6">

                                <h6 class="py-3">INFORMASI PRIBADI</h6>
                                <hr class="small">
                                <div class="row justify-content-center py-2">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                                <label class="col-sm-3" style="margin-right: 46px;" for="pasFoto">Pas Foto (ukuran 3x4)</label>
                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control-file" id="pasFoto" name="photo">
                                                </div>  
                                        </div>
                                    </div>
                                </div>                      
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="namaLengkap">Nama Lengkap</label>
                                                <div class="col-sm-8 offset-sm-1">
                                                    <input type="text" class="form-control" id="namaLengkap" name="name" placeholder="">
                                                </div>  
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <div class="form-group">
                                        <div class="row py-2">
                                            <legend class="col-form-legend col-sm-3">Jenis Kelamin</legend> 
                                            <div class="col-sm-8" style="padding-left: 63px;">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenisKelaminPria" value="Pria" checked>
                                                        Pria
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenisKelaminWanita" value="Wanita">
                                                        Wanita
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center py-2">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                                                <div class="col-md-8 offset-md-1">
                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center py-2">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                                <div class="col-md-8 offset-md-1">
                                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>              

                                <div class="row justify-content-center py-2">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="alamat">Alamat</label>
                                                <div class="col-sm-8 offset-sm-1">
                                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
                                                </div>  
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center py-2">
                                    <div class="col-sm-12">
                                        <div class="form-row align-items-center">
                                                    <label class="col-sm-3" for="agama" style="margin-right: 59px;">Agama</label>
                                                        <select class="custom-select my-3" id="agama" name="agama">
                                                            <option selected></option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Protestan">Kristen Prostentan</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Kong Hu Cu">Hindu</option>
                                                        </select>   
                                        </div>
                                    </div>
                                </div>                      
                                <div class="row justify-content-center py-2">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="email">Email</label>
                                                <div class="col-md-8 offset-md-1">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="">
                                                </div>  
                                        </div>
                                    </div>
                                </div>                      
                                <div class="row justify-content-center py-2">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="noHandphone">Nomor Handphone</label>
                                                <div class="input-group col-sm-8 offset-sm-1">
                                                    <span class="input-group-addon" id="noHandphone">+62</span>
                                                    <input type="text" class="form-control" id="noHandphone" name="no_hp" placeholder="">
                                                </div>  
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            
                            <div class="col-sm-6" style="padding-left: 40px;">
                                <h6 class="py-3">INFORMASI PENDIDIKAN</h6>
                                <hr class="small">
                                <p class=" py-1">Silakan isi informasi pendidikan di bawah ini sesuai pendidikan terakhir.</p>
                                <div class="row justify-content-center py-2">
                                    <div class="col-sm-12">
                                        <div class="form-row align-items-center">
                                                    <label class="col-sm-3" for="pendidikan" style="margin-right: 9px;">Pendidikan</label>
                                                        <select class="custom-select col-sm-7 mb-1 mr-sm-0 mb-sm-0" id="pendidikan" name="pendidikan">
                                                            <option selected></option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="SMK">SMK</option>
                                                            <option value="D3">D3</option>
                                                            <option value="D4">D4</option>
                                                            <option value="S1">S1</option>
                                                            <option value="S2">S2</option>
                                                            <option value="S3">S3</option>
                                                        </select>   
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center py-2">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="namaInstitusiPendidikan">Nama Institusi Pendidikan</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="namaInstitusiPendidikan" placeholder="" name="nama_institusi_pendidikan">
                                                </div>  
                                        </div>
                                    </div>
                                </div>

                                <h6 class="py-3">INFORMASI PENGALAMAN</h6>
                                <hr class="small">
                                <p class=" py-1">Silakan upload informasi pengalaman dalam bentuk CV.</p>

                                <div class="row justify-content-center py-2">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                                <label class="col-md-3" for="CV">Curriculum Vitae (CV)</label>
                                                <div class="col-md-8">
                                                    <input type="file" class="form-control-file" id="CV" name="cv">
                                                </div>  
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row justify-content-center pt-3 pb-5">
                            <div>
                                <button type="submit" class="btn btn-submit">Simpan & Lanjutkan</button>   
                            </div>  
                            <div class="pl-2">
                                <a class="btn btn-cancel" href="../index.html" role="button">Kembali Ke Beranda</a>   
                            </div>
                        </div>
                        
                    </form>
                </div>    

            </div>
            
        </div>

        <footer class="container footer navbar-fixed-bottom pt-3" style="height: 100px;">
            <hr class="medium"> 
                <h6 class="py-3">© 2017 Yayasan Indonesia Mengajar. Some Rights Reserved.</h6>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>        
        