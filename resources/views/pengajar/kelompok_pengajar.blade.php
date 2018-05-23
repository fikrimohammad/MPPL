@extends('layouts.app')
@section('content')


            <div class="container">

                <h4 class="text-center py-3">KELOMPOK PENGAJAR & TEMPAT PENUGASAN</h4>


                <div class="row pb-2 justify-content-center">

                    <div class="col-sm-8 mx-5 text-center">
                        @if($kelompok)
                        <div class="row pt-3 font-weight-bold">
                            <div class="col justify-content-start">
                                <p>Nama Kelompok : {{$kelompok->nama}}</p>
                            </div>
                            <div class="col justify-content-end">
                                <p>Tempat Penugasan : <a href="kelompok_pengajar/penugasan">{{$kelompok->tempat_penugasan}}</a></p>
                            </div>
                        </div>
                        <table class="table table-hover font-weight-bold">
                            <thead>
                                <th scope="col">ID Pengajar</th>
                                <th scope="col">Nama Pengajar</th>
                                <th scope="col">Kontak Pengajar</th>
                            </thead>
                            <tbody>
                                @foreach($kelompok->pengajar as $peng)
                                    <tr>
                                        <th scope="row">PENG000{{$peng->id}}</th>
                                        <td>{{$peng->nama}}</td>
                                        <td>+62{{$peng->no_hp}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            Anda belum mendapatkan kelompok pengajar
                        @endif
                        <div class="row justify-content-end pt-3">
                            <div class="col-sm-5">
                                <div class="row justify-content-end">
                                    <div class="col-sm-3">
                                        <div class="text-center">
                                            <a href="{{url('pengajar')}}"><img src="{{asset('/logo/back-button.png')}}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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
