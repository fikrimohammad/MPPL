@extends('layouts.app')
@section('content')
    <div class="container">

        <h4 class="text-center py-3">TEMPAT PENUGASAN</h4>

        <div class="row pb-2 justify-content-center">
            <div class="col-sm-8 mx-5 text-center">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table class="table table-hover font-weight-bold">
                    <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Tempat</th>
                    <th scope="col">Alamat Tempat</th>
                    <th scope="col">Nama Contact Person</th>
                    <th scope="col">Nomor Handphone Person</th>
                    <th scope="col">Action</th>
                    </thead>
                    <tbody>
                    @foreach($tempat_penugasan as $tp)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $tp->nama }}</td>
                            <td>{{ $tp->alamat }}</td>
                            <td>{{ $tp->nama_contact_person }}</td>
                            <td>{{ $tp->no_hp_contact_person }}</td>
                            <td>
                                <a href="{{ route('tempat_penugasan.edit', $tp->id) }}">Edit</a>
                                | <a href="{{ route('tempat_penugasan.destroy', $tp->id) }}" onclick="event.preventDefault();
										document.getElementById('destroy-form').submit();">
                                    Delete
                                    <form id="destroy-form" action="{{ route('tempat_penugasan.destroy', $tp->id) }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                    </form>

                                </a>
                                | <a href="{{ route('tempat_penugasan.show', $tp->id) }}">Show</a>
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
                                    <a href="{{ route('tempat_penugasan.create') }}"><img src="{{ asset('logo/save.png') }}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
                                </button>
                                <p class="font-weight-bold text-center">Add Data</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="text-center">
                                    <a href="../menu_bagian_penempatan.php"><img src="{{ asset('logo/back-button.png') }}" alt="Card image cap" style="width: 32px; height: 32px;"></a>
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