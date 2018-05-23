@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materi_pelatihan_upload.css') }}">

    <div class="container">
        <form action="{{ route('materi_pelatihan.update', $materi_pelatihan->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field()  }}
            @method('PUT')
            @if ($message = Session::get('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Whoops!</strong> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @foreach ($errors->all() as $message)
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Whoops!</strong> {{ $message }}
                </div>
            @endforeach
            <div class="row pt-3 pb-5 justify-content-center">
                <div class="col-sm-8 mx-5 text-center">
                    <div class="row pt-4 pb-2 justify-content-center">
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="nama_materi_pelatihan">Nama Materi Pelatihan</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_materi_pelatihan" name="nama_materi_pelatihan" value="{{ $materi_pelatihan->nama }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="id_jadwal_pelatihan">Nama Pelatihan</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="id_jadwal_pelatihan" name="id_jadwal_pelatihan">
                                        @foreach($jadwal_pelatihan as $jp)
                                            <option value="{{ $jp->id }}" {{ ($materi_pelatihan->jadwal->id == $jp->id ? "selected":"") }}> {{$jp->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="materi_pelatihan">File Materi Pelatihan</label>
                                <div class="col-sm-5">
                                    <input type="file" id="materi_pelatihan" name="materi_pelatihan" class="form-control-static">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end pt-3">
                        <div class="col-sm-5">
                            <div class="row justify-content-end">
                                <div class="col-sm-4">
                                    <button type="submit" class="text-center" id="submit_button">
                                        <img src="{{ asset('logo/save.png') }}" alt="Card image cap" style="width: 32px; height: 32px;">
                                    </button>
                                    <p class="font-weight-bold text-center">Submit</p>
                                </div>
                                <div class="col-sm-3">
                                    <div class="text-center">
                                        <a href="{{ route('materi_pelatihan.index') }}"><img src="{{ asset('logo/back.png') }}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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
@endsection
