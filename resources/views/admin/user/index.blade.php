@extends('layout.app')

@section('title', 'User Page')

@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-2">Table user</h6>
            <a href="{{ route('user.create') }}" class="btn btn-outline-info btn-sm my-2">Tambah User</a>
            @csrf
            @method('PUT')
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Hak Akses</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $user->nama_lengkap }}</td>
                                <td>{{ $user->levels->nama_level }}</td>
                                <td class="justify-content-center"><a href="{{ route('user.edit', $user->id) }}"
                                        class="btn btn-outline-warning btn-sm">Update</a> |
                                    <form class="d-inline" action="{{ route('user.destroy', $user->id) }}" method="POST">
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
