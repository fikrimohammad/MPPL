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
                        <th scope="col">Action</th>
                    </thead>
                    <tbody>
                    @foreach($materi_pelatihan as $mp)
                        <tr>
                            <th scope="row">PEL000{{ $mp->id_jadwal_pelatihan }}</th>
                            <td>{{ $mp->nama }}</td>
                            <td>
                                <a href="{{ route('materi_pelatihan.show', $mp->id) }}">Show</a> |
                                <a href="{{ route('materi_pelatihan.edit', $mp->id) }}">Edit</a> |
                                <a href="" onclick="event.preventDefault();
										document.getElementById('destroy-form').submit();">
                                    Delete
                                    <form id="destroy-form" action="{{ route('materi_pelatihan.destroy', $mp->id) }}" method="POST" style="display: none;" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                    </form>
                                </a>
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
                                    <a href="{{ route('materi_pelatihan.create') }}"><img src="../logo/save.png" alt="Card image cap" style="width: 32px; height: 32px;"></a>
                                </button>
                                <p class="font-weight-bold text-center">Add Data</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="text-center">
                                    <a href="{{ route('pelatihan') }}"><img src="{{ asset('/logo/back-button.png') }}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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
