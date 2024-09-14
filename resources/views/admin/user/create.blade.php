@extends('layout.app')
@section('title', 'Add User Page')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="col-sm-12 col-xl-5">
        <div class="bg-secondary rounded h-100 p-4">
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama Level</label>
                    <select name="id_level" id="nama_level" class="form-select">
                        <option value="">Pilih Level</option>
                        @foreach ($levels as $lvl)
                            <option value="{{ $lvl->id }}">{{ $lvl->nama_level }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-outline-info btn-sm" name="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
