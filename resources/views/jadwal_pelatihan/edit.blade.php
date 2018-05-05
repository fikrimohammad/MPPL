@extends('layouts.app')
@section('content')
<div class="container">

    <h4 class="text-center py-3">FORM PENGISIAN JADWAL PELATIHAN</h4>

    <form action="{{ route('jadwal_pelatihan.store') }}" method="POST">
        {{ csrf_field()  }}
        @method('PUT')

        <div class="row pb-2 justify-content-center">
            <div class="col-sm-8 mx-5 text-center">
                <div class="row pt-4 pb-2 justify-content-center">
                    <div class="col-sm-10">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label" for="nama_pelatihan">Nama Pelatihan</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="nama_pelatihan" name="nama_pelatihan" value="{{ $jadwal_pelatihan->nama }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-2 justify-content-center">
                    <div class="col-sm-10">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label" for="tgl_dan_waktu">Tanggal & Waktu Pelatihan</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="tgl_dan_waktu" name="tgl_dan_waktu" value="{{ $jadwal_pelatihan->tgl_dan_waktu }}">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row py-2 justify-content-center">
                    <div class="col-sm-10">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label" for="alamat_tempat">Alamat Tempat Pelatihan</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="alamat_tempat" name="alamat_tempat" value="{{ $jadwal_pelatihan->alamat_tempat }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end pt-3">
                    <div class="col-sm-5">
                        <div class="row justify-content-end">
                            <div class="col-sm-4">
                                <button type="submit" class="text-center" id="submit_button">
                                    <img src="../logo/save.png" alt="Card image cap" style="width: 32px; height: 32px;">
                                </button>
                                <p class="font-weight-bold text-center">Submit</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="text-center">
                                    <a href="{{ route('jadwal_pelatihan.index') }}"><img src="../logo/window-back-button.png" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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