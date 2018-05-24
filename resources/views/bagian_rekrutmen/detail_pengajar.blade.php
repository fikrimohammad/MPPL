@extends('layouts.app')
@section('content')
        <div class="container">

            <h4 class="text-center py-3">Detail Pengajar</h4>

            <div class="row pb-2 justify-content-center">
                <div class="col-sm-8 mx-5 text-center">
                    <div class="row pt-3 font-weight-bold">
                        <div class="col justify-content-start">
                            <p>Nama : {{$pengajar->nama}}</p>
                            <p>Status : @if($pengajar->status_kelulusan)Lulus @else Tidak Lulus @endif</p>
                            <p>DST</p>
                        </div>
                        
                    </div>
                    <div class="col justify-content-end"></div>
                    <div class="row justify-content-end pt-3">
                        <div class="col-sm-5">
                            <div class="row justify-content-end">
                                <div class="col-sm-3">
                                    <div class="text-center">
                                        <a href="{{url('pegawai/manage-pengajar')}}"><img src="{{asset('/logo/back-button.png')}}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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
