@extends('layouts.app')
@section('content')
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="tab_pengajar_content" role="tabpanel" aria-labelledby="tab_pengajar">
                <div class="container">
                
                    <h4 class="text-center py-3">HALAMAN LOGIN PENGAJAR</h4>
                    
                    <form method="post" action="{{route('loginPengajar')}}">
                        {{csrf_field()}}
                        <div class="row justify-content-center">
                            <div class="col-sm-6 ">
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="emailPengajar">Email</label>
                                                <div class="col-sm-8 offset-sm-1">
                                                    <input type="text" class="form-control" id="emailPengajar" placeholder="" name="email">
                                                </div>  
                                        </div>
                                    </div>
                                </div>             
                                <div class="row justify-content-center py-2">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="passwordPengajar">Password</label>
                                                <div class="col-md-8 offset-md-1">
                                                    <input type="password" class="form-control" id="passwordPengajar" placeholder="" name="password">
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
                                <a class="btn btn-cancel" href="{{url('/')}}" role="button">Kembali Ke Beranda</a>
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
@endsection