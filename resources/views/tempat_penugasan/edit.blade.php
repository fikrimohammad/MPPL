@extends('layouts.app')
@section('content')
    <div class="container">

        <h4 class="text-center py-3">FORM PENGISIAN TEMPAT PENUGASAN</h4>

        <form action="{{ route('tempat_penugasan.update', $tempat_penugasan->id) }}" method="POST">
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

            <div class="row pb-2 justify-content-center">
                <div class="col-sm-8 mx-5 text-center">
                    <div class="row pt-4 pb-2 justify-content-center">
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="nama">Nama Tempat Penugasan </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $tempat_penugasan->nama }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="alamat">Alamat Tempat Penugasan</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $tempat_penugasan->alamat }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="nama_contact_person">Nama Contact Person Tempat Penugasan</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_contact_person" name="nama_contact_person" value="{{ $tempat_penugasan->nama_contact_person }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="no_hp_contact_person">No HP Contact Person Tempat Penugasan</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="no_hp_contact_person" name="no_hp_contact_person" value="{{ $tempat_penugasan->no_hp_contact_person }}">
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
                                        <a href="{{ route('tempat_penugasan.index') }}"><img src="{{ asset('logo/back.png') }}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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