@extends('layout.app')
@section('title', 'Tambah User')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="mb-3">
                <label for="">Nama Level</label>
                <select name="nama_level" id="nama_level">
                    <option value="">Pilih Level</option>
                    @foreach ($levels as $lvl)
                        <option value="{{ $lvl->id }}">{{ $lvl->nama_level }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" required>
            </div>
            <div class="mb-3">
                <label for="nama">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-dark" name="submit">Simpan</button>
        </div>
    </form>
    </div>


@endsection
