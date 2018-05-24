@extends('layouts.app')
@section('content')
    <div class="container">

        <h4 class="text-center py-3">FORM PENGISIAN KELOMPOK PENGAJAR</h4>

        <form action="{{ route('kelompok_pengajar.store') }}" method="POST">
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
            {{ csrf_field() }}
            <div class="row pb-2 justify-content-center">
                <div class="col-sm-8 mx-5 text-center">
                    <div class="row pt-4 pb-2 justify-content-center">
                        <div class="col-sm-8">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="namaKelompok">Nama Kelompok</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="namaKelompok" name="namaKelompok">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4 pb-2 justify-content-center">
                        <div class="col-sm-8">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="tempatPenugasan">Tempat Penugasan</label>
                                <div class="col-sm-5">
                                    <select type="text" class="form-control" id="tempatPenugasan" name="tempatPenugasan">
                                        <option selected></option>
                                        @foreach($tempat_penugasan as $tp)
                                            <option value="{{$tp->id}}">{{$tp->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-sm-8">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="idPengajar_1">ID Pengajar 1</label>
                                <div class="col-sm-2 ">
                                    <input type="text" readonly class="form-control-plaintext" value="PG">
                                </div>
                                <div class="col-sm-2" style="margin-left: -40px;">
                                    <input type="text" readonly class="form-control-plaintext" value="-">
                                </div>
                                <div class="col-sm-3" style="margin-left: -40px;">
                                    <select class="form-control" id="idPengajar_1" name="idPengajar_1">
                                        <option selected value="-99999999"></option>
                                        @foreach($pengajar as $peng)
                                            <option value="{{ $peng->id }}">{{ $peng->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-sm-8">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="idPengajar_2">ID Pengajar 2  </label>
                                <div class="col-sm-2 ">
                                    <input type="text" readonly class="form-control-plaintext" value="PG">
                                </div>
                                <div class="col-sm-2" style="margin-left: -40px;">
                                    <input type="text" readonly class="form-control-plaintext" value="-">
                                </div>
                                <div class="col-sm-3" style="margin-left: -40px;">
                                    <select class="form-control" id="idPengajar_2" name="idPengajar_2">
                                        <option selected value="-99999999"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 justify-content-center">
                        <div class="col-sm-8">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="idPengajar_3">ID Pengajar 3  </label>
                                <div class="col-sm-2 ">
                                    <input type="text" readonly class="form-control-plaintext" value="PG">
                                </div>
                                <div class="col-sm-2" style="margin-left: -40px;">
                                    <input type="text" readonly class="form-control-plaintext" value="-">
                                </div>
                                <div class="col-sm-3" style="margin-left: -40px;">
                                    <select class="form-control" id="idPengajar_3" name="idPengajar_3">
                                    </select>
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
                                        <a href="{{ route('kelompok_pengajar.index') }}"><img src="{{ asset('logo/back.png') }}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
                                    </div>
                                    <p class="font-weight-bold text-center pt-1">Kembali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#idPengajar_1').on('change', function (e) {
                    $('#idPengajar_2').empty();
                    console.log(e);

                    var peng_id = e.target.value
                    // alert(peng_id);

                    $.get('/ajax_kp1?peng_id=' + peng_id, function (data) {
                        $.each(data, function (index, pengajar) {
                            $('#idPengajar_2').append('<option value="'+pengajar.id+'">'+pengajar.nama+'</option>');
                        })
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#idPengajar_2').on('change', function (e) {
                    $('#idPengajar_3').empty();
                    console.log(e);

                    var temp = document.getElementById('idPengajar_1');
                    var peng_id1 = temp.options[temp.selectedIndex].value;
                    var peng_id2 = e.target.value
                    // alert(peng_id1 + ' ' + peng_id2);

                    $.get('/ajax_kp2?peng_id1=' + peng_id1 + '&peng_id2=' + peng_id2, function (data) {
                        $.each(data, function (index, pengajar) {
                            console.log(data);
                            $('#idPengajar_3').append('<option value="'+pengajar.id+'">'+pengajar.nama+'</option>');
                        })
                    });
                });
            });
        </script>
    </div>
@endsection