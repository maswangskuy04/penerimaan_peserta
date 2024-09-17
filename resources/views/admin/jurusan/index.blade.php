@extends('layout.app')

@section('title', 'Jurusan Page')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('jurusan.create') }}" class="btn btn-outline-info">Tambah Jurusan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jurusan</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusans as $key => $jurusan)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $jurusan->nama_jurusan }}</td>
                                    <td>
                                        <a href="{{ route('jurusan.edit', $jurusan->id) }}"
                                            class="btn btn-outline-secondary btn-sm">Edit</a>
                                        <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
