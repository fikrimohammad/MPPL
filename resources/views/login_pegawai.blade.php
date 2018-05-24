@extends('layouts.app')
@section('content')
    <div class="container">

        <h4 class="text-center py-3">HALAMAN LOGIN PEGAWAI</h4>
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                <strong>Error! </strong> {{$error}}
                @endforeach
        </div>
        @endif

        <form action="{{url('/pegawai/login')}}" method="post">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="col-sm-6 ">
                    <div class="row py-2">
                        <div class="col-sm-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="email">Email</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection