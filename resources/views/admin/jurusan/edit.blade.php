@extends('layout.app')
@section('title', 'Edit Jurusan')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('jurusan.update', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4>Form Jurusan</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Jurusan</label>
                            <input type="text" class="form-control" name="nama_jurusan" value="{{ $edit->nama_jurusan }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Perbarui</button>
                        <a href="{{ route('jurusan.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
