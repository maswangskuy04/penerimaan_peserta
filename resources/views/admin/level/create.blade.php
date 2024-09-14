@extends('layout.app')

@section('title', 'Tambah Level Page')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="col-sm-12 col-xl-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Form Tambah Level</h6>
            <form action="{{ route('level.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama">Nama Level</label>
                    <input class="form-control" type="text" name="nama_level" id="nama_level" required>
                </div>
                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
            </form>
        </div>
    </div>
@endsection
