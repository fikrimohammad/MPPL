@extends('layouts.app')
@section('content')
    <div class="container">

        <form action="{{route('pengajar.update', $pengajar->id)}}" method="POST">
            {{csrf_field()}}
            @method('PUT')
            <h4 class="text-center py-3">Edit Pengajar</h4>
                <div class="row pb-2 justify-content-center">
                    <div class="col-sm-8 mx-5 text-center">
                        <table class="table table-hover font-weight-bold">
                            <tbody>

                                    <tr>
                                        <td>ID</td>
                                        <td scope="row">PENG000{{$pengajar->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td scope="row">{{$pengajar->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="status_kelulusan" id="status_kelulusan" value="1" checked>
                                                    Lulus
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="status_kelulusan" id="status_kelulusan" value="0">
                                                    Tidak Lulus
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

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
                                            <a href="{{url('manage-pengajar')}}"><img src="{{asset('/logo/back-button.png')}}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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
