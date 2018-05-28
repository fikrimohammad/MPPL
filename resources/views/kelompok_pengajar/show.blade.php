@extends('layouts.app')
@section('content')
    <div class="container">

        <h4 class="text-center py-3">Detail Kelompok</h4>

        <div class="row pb-2 justify-content-center">
            <div class="col-sm-8 mx-5 text-center">
                <div class="row pt-3 font-weight-bold">
                    <div class="col justify-content-start">
                        <p>ID Kelompok : KP00{{ $kelompok_pengajar->id }}</p>
                        <p>Nama Kelompok : {{ $kelompok_pengajar->nama }}</p>
                        <p>Tempat Penugasan : {{ $kelompok_pengajar->penugasan->nama }}</p>
                        <p>Anggota : </p>
                        @foreach($kelompok_pengajar->pengajar as $pengajar)
                            <p>{{++$i}}. {{ $pengajar->nama }}</p>
                        @endforeach
                    </div>

                </div>
                <div class="col justify-content-end"></div>
                <div class="row justify-content-end pt-3">
                    <div class="col-sm-5">
                        <div class="row justify-content-end">
                            <div class="col-sm-3">
                                <div class="text-center">
                                    <a href="{{ route('kelompok_pengajar.index') }}"><img src="{{asset('logo/back-button.png')}}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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