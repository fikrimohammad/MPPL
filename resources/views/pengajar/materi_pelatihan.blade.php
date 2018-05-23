@extends('layouts.app')
@section('content')
        <div class="container">

            <h4 class="text-center py-3">MATERI PELATIHAN</h4>

            <div class="row pb-2 justify-content-center">
                <div class="col-sm-8 mx-5 text-center">
                    <table class="table table-hover font-weight-bold">
                        <thead>
                            <th scope="col">Id Pelatihan</th>
                            <th scope="col">Nama Materi</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            @foreach($materi as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        <div>
                                            <a href="/pengajar/materi_pelatihan/{{$item->id}}/download"><button class="btn btn-primary">Download</button></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-end pt-3">
                        <div class="col-sm-5">
                            <div class="row justify-content-end">
                                <div class="col-sm-3">
                                    <div class="text-center">
                                        <a href="{{url('pengajar')}}"><img src="../logo/back-button.png" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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
