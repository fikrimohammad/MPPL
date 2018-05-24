@extends('layouts.app')
@section('content')
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="tab_pengajar_content" role="tabpanel" aria-labelledby="tab_pengajar">
                <div class="container">
                
                    <h4 class="text-center py-3">FORM REGISTRASI PENGAJAR</h4>
                    @if(isset($errors))
                        {{$errors}}
                    @endif
                    <form method="post" action="{{route('registerPengajar')}}" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">

                                <h6 class="py-3">INFORMASI PRIBADI</h6>
                                <hr class="small">
                                <div class="row justify-content-center py-2">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                                <label class="col-sm-3" style="margin-right: 46px;" for="photo">Pas Foto (ukuran 3x4)</label>
                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control-file" id="photo" name="photo">
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
                                            <label class="col-form-label col-sm-3">Jenis Kelamin</label>
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
                                                        <select class="custom-select col-sm-7 mb-1 mr-sm-0 mb-sm-0" id="agama" name="agama">
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
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                                    </div>
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
                                                <label class="col-md-3" for="cv">Curriculum Vitae (CV)</label>
                                                <div class="col-md-8">
                                                    <input type="file" class="form-control-file" id="cv" name="cv">
                                                </div>  
                                        </div>
                                    </div>
                                </div>

                                <h6 class="py-3">Autentifikasi</h6>
                                <hr class="small">
                                <p class=" py-1">Silakan isi password akun yang anda inginkan.</p>

                                <div class="row justify-content-center py-2">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="password">Password</label>
                                            <div class="col-md-8 offset-md-1">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center py-2">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="password_confirmation">Confirmasi Password</label>
                                            <div class="col-md-8 offset-md-1">
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                        {{csrf_field()}}
                        <div class="row justify-content-center pt-3 pb-5">
                            <div>
                                <button type="submit" class="btn btn-submit">Simpan & Lanjutkan</button>   
                            </div>  
                            <div class="pl-2">
                                <a class="btn btn-cancel" href="{{url('/')}}" role="button">Kembali Ke Beranda</a>
                            </div>
                        </div>
                        
                    </form>
                </div>    

            </div>
            
        </div>
@endsection
        