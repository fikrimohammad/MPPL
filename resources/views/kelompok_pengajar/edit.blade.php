@extends('layouts.app')
@section('content')
    <div class="container">

        <h4 class="text-center py-3">FORM PENGISIAN KELOMPOK PENGAJAR</h4>

        <form action="{{ route('kelompok_pengajar.update', $kelompok_pengajar->id) }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="row pb-2 justify-content-center">
                <div class="col-sm-8 mx-5 text-center">
                    <div class="row pt-4 pb-2 justify-content-center">
                        <div class="col-sm-8">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="namaKelompok">Nama Kelompok</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="namaKelompok" name="namaKelompok" value="{{ $kelompok_pengajar->nama }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    for($i = 0 ; $i <= 2 ; $i++)
                    {
                    ?>
                        <div class="row py-2 justify-content-center">
                            <div class="col-sm-8">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="idPengajar">ID Pengajar <?php echo $i+1; ?>  </label>
                                    <div class="col-sm-2 ">
                                        <input type="text" readonly class="form-control-plaintext" value="PG">
                                    </div>
                                    <div class="col-sm-2" style="margin-left: -40px;">
                                        <input type="text" readonly class="form-control-plaintext" value="-">
                                    </div>
                                    <div class="col-sm-3" style="margin-left: -40px;">
                                        <input type="text" class="form-control" id="idPengajar" name="idPengajar_<?php echo $i+1; ?>"
                                        value="{{ $kelompok_pengajar->pengajar[$i+1]->id }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
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
    </div>
@endsection 