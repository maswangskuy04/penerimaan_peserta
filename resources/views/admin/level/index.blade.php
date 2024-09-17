@extends('layout.app')

@section('title', 'Level Page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('level.create') }}" class="btn btn-outline-info">Tambah Level</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Level</th>
                                    <th class="col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($levels as $key => $level)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $level->nama_level }}</td>
                                        <td>
                                            <a href="{{ route('level.edit', $level->id) }}"
                                                class="btn btn-outline-secondary btn-sm">Edit</a>
                                            <form action="{{ route('level.destroy', $level->id) }}" method="post"
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
