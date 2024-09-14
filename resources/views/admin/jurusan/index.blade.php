@extends('layout.app')

@section('title', 'Jurusan Page')

@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4 mb-4">
            <h6 class="mb-2">Table Jurusan</h6>
            <a href="{{ route('jurusan.create') }}" class="btn btn-outline-info btn-sm my-2">Tambah Jurusan</a>
            @csrf
            @method('PUT')
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th scope="col">Nama Jurusan</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusans as $key => $jurusan)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $jurusan->nama_jurusan }}</td>
                                <td>
                                    <a href="{{ route('jurusan.edit', $jurusan->id) }}"
                                        class="btn btn-outline-warning btn-sm">Update</a> |
                                        <form class="d-inline" action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Danger</button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
