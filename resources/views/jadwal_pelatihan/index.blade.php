@extends('layouts.app')
@section('content')
    <div class="container">

        <h4 class="text-center py-3">JADWAL PELATIHAN</h4>

        <div class="row pb-2 justify-content-center">
            <div class="col-sm-8 mx-5 text-center">
                <table class="table table-hover font-weight-bold">
                    <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pelatihan</th>
                    <th scope="col">Tanggal & Waktu Pelatihan</th>
                    <th scope="col">Tempat Pelatihan</th>
                    <th scope="col">Action</th>
                    </thead>
                    <tbody>
                    @foreach($jadwal_pelatihan as $jadwal)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $jadwal->nama }}</td>
                            <td>{{ $jadwal->tgl_dan_waktu }}</td>
                            <td>{{ $jadwal->alamat_tempat }}</td>
                            <td>
                                <a href="{{ route('jadwal_pelatihan.edit', $jadwal->id) }}">Edit</a>
                                | <a href="{{ route('jadwal_pelatihan.destroy', $jadwal->id) }}">Delete</a>
                                | <a href="{{ route('jadwal_pelatihan.show', $jadwal->id) }}">Show</a>
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
                                    <a href="{{ route('jadwal_pelatihan.create') }}"><img src="../logo/save.png" alt="Card image cap" style="width: 32px; height: 32px;"></a>
                                </button>
                                <p class="font-weight-bold text-center">Add Data</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="text-center">
                                    <a href="../menu_bagian_pelatihan.php"><img src="../logo/back-button.png" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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