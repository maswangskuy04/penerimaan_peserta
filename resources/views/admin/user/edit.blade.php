@extends('layout.app')
@section('title', 'Edit User Page')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('user.update', $edit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
            <label for="nama">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" required
                value="{{ $edit->nama_lengkap }}">
        </div>
        <div class="mb-3">
            <label for="nama">Email</label>
            <input class="form-control" type="email" name="email" id="email" required value="{{ $edit->email }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
            <a href="{{ url('user.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
        </div>
    </form>

@endsection
