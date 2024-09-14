@extends('layout.app')
@section('title', 'Level Page')

@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-2">Table Level</h6>
            <a href="{{ route('level.create') }}" class="btn btn-outline-info btn-sm my-2">Tambah Level</a>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th scope="col">Nama Level</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($levels as $key => $lvl)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $lvl->nama_level }}</td>
                                <td class="justify-content-center"><a href="{{ route('level.edit', $lvl->id) }}"
                                    class="btn btn-outline-warning btn-sm">Update</a> |
                                    <form class="d-inline" action="{{ route('level.destroy', $lvl->id) }}" method="POST">
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
