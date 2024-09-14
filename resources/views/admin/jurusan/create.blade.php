@extends('layout.app')
@section('title', 'Tambah Jurusan Page')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('jurusan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama Jurusan</label>
            <input class="form-control" type="text" name="nama_jurusan" id="nama_jurusan" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
            <a href="{{ url('jurusan.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
        </div>
    </form>

@endsection
