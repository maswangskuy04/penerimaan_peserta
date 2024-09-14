@extends('layout.app')
@section('title', 'Tambah Gelombang Page')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('gelombangs.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama Gelombang</label>
            <input class="form-control" type="text" name="nama_gelombang" id="nama_gelombang" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
            <a href="{{ url('gelombangs.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
        </div>
    </form>

@endsection
