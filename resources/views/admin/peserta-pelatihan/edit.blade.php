@extends('layout.app')
@section('title', 'Edit Peserta Page')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('peserta-pelatihan.update', $edit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="py-3">Peserta Pelatihan</label>
            <select name="" id="" class="form-select">
                <option value="">PIlih Status</option>
                <option value="0">Tidak Lulus</option>
                <option value="1">Lulus</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
            <a href="{{ url('peserta-pelatihan.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
        </div>
    </form>

@endsection
