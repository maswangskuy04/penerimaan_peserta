@extends('layout.app')
@section('title', 'Edit Level')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('level.update', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4>Form Level</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Level</label>
                            <input type="text" class="form-control" name="nama_level" value="{{ $edit->nama_level }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Perbarui</button>
                        <a href="{{ route('level.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
