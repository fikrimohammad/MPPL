@extends('layouts.app')
@section('content')
        <div class="container">

            <h4 class="text-center py-3">LIST PENGAJAR LULUS</h4>
            @if(isset($message))
                @if($type == 'error')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error! </strong> {{$message}}
                    </div>
                @elseif($type == 'success')
                    <div class="alert alert-danger" role="alert">
                        <strong>Success! </strong> {{$message}}
                    </div>
                    @endif
                @endif
            <form action="input_data_pengajar_lulus_process.php" method="POST"> 
                <div class="row pb-2 justify-content-center">
                    <div class="col-sm-8 mx-5 text-center">
                        <table class="table table-hover font-weight-bold">
                            <thead>
                                <th scope="col">Id Pengajar</th>
                                <th scope="col">Nama Pengajar</th>
                                <th scope="col">Status Kelulusan</th>
                                <th scope="col">Option</th>
                            </thead>
                            <tbody>
                            @foreach($pengajar as $peng)
                                <tr>
                                    <th scope="row">PENG000{{ $peng->id }}</th>
                                    <td>{{$peng->nama}}</td>
                                    <td>
                                        @if ($peng->status_kelulusan == 1)
                                            Lulus
                                        @else Tidak Lulus
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('pengajar.edit', $peng->id) }}">Edit</a> |
                                        <a href="{{ route('pengajar.show', $peng->id) }}">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-end pt-3">
                            <div class="col-sm-5">
                                <div class="row justify-content-end">
                                    <div class="col-sm-4">
                                        <button type="submit" class="text-center" id="submit_button">
                                            <img src="{{asset('/logo/save.png')}}" alt="Card image cap" style="width: 32px; height: 32px;">
                                        </button>
                                        <p class="font-weight-bold text-center">Simpan</p>    
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="text-center">
                                            <a href="{{url('pegawai/rekrutmen')}}"><img src="{{asset('/logo/back-button.png')}}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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