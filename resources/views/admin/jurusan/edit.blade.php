@extends('layout.app')
@section('title', 'Edit Jurusan')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif


    <div class="col-sm-12 col-xl-5">
        <div class="bg-secondary rounded h-100 p-4">
            <form action="{{ route('jurusan.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama">Nama Jurusan</label>
                    <input class="form-control" type="text" name="nama_jurursan" id="nama_jurursan" required
                        value="{{ $edit->nama_jurursan }}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
                    <a href="{{ url('jurusan.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
                </div>
            </form>
        </div>
    </div>

@endsection
