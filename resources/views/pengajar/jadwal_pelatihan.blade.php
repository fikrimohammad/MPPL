@extends('layouts.app')
@section('content')
    <div class="container">

        <h4 class="text-center py-3">JADWAL PELATIHAN</h4>

        <div class="row pb-2 justify-content-center">
            <div class="col-sm-8 mx-5 text-center">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table class="table table-hover font-weight-bold">
                    <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pelatihan</th>
                    <th scope="col">Tanggal & Waktu Pelatihan</th>
                    <th scope="col">Tempat Pelatihan</th>
                    </thead>
                    <tbody>
                    @foreach($jadwal as $jd)
                        <tr>
                            <th scope="row">{{ $loop->count }}</th>
                            <td>{{ $jd->nama }}</td>
                            <td>{{ $jd->tgl_dan_waktu }}</td>
                            <td>{{ $jd->alamat_tempat }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row justify-content-end pt-3">
                    <div class="col-sm-5">
                        <div class="row justify-content-end">
                            <div class="col-sm-3">
                                <div class="text-center">
                                    <a href="{{ url('pengajar') }}"><img src="{{ asset('logo/back-button.png') }}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
                                </div>
                                <p class="font-weight-bold text-center">Kembali</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection