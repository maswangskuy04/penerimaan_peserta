@extends('layout.app')
@section('title', 'Edit Level')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('level.update', $edit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama">Nama Level</label>
            <input class="form-control" type="text" name="nama_level" id="nama_level" required value="{{ $edit->nama_level }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
            <a href="{{ url('level.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
        </div>
    </form>

@endsection
