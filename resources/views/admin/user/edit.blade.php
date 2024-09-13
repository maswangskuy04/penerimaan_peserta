@extends('layout.app')
@section('title', 'Edit User')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('user.edit', $edit->id) }}" mothod="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required value="{{ $edit->nama_lengkap }}">
        </div>
        <div class="mb-3">
            <label for="nama">Email</label>
            <input type="email" name="email" id="email" required value="{{ $edit->email }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
            <a href="{{ url('user.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
        </div>
    </form>

@endsection
