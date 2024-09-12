@extends('layout.app')

@section('title', 'Level Page')

@section('content')
<<<<<<< HEAD
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-2">Table Level</h6>
            <a href="{{ route('level.create') }}" class="btn btn-outline-info btn-sm my-2">Tambah Level</a>
            <div class="table-responsive">
                <table class="table table-hover text-center">
=======
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Table Level</h6>
            <a href="{{ route('level.create') }}" class="btn btn-outline-info btn-sm mb-3">Tambah Level</a>
            <div class="table-responsive">
                <table class="table text-center">
>>>>>>> 671ae7349aea329c0caef8715476e966f120d9e0
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th scope="col">Nama Level</th>
<<<<<<< HEAD
                            <th class="col-2">Aksi</th>
=======
                            <th class="col-2">Action</th>
>>>>>>> 671ae7349aea329c0caef8715476e966f120d9e0
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($levels as $key => $level)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $level->nama_level }}</td>
                                <td>
<<<<<<< HEAD
                                    <a href="" class="btn btn-outline-warning btn-sm">Update</a> |
                                    <a href="" class="btn btn-outline-danger btn-sm">Danger</a>
                                </td>
                            </tr>
                        @endforeach

=======
                                    <a href="{{ route('level.edit', $level->id) }}"
                                        class="btn btn-outline-warning btn-sm">Edit</a> |
                                    <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
>>>>>>> 671ae7349aea329c0caef8715476e966f120d9e0
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
