@extends('layout.app')
@section('title', 'Tambah Jurusan Page')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('jurusan.store') }}" method="POST">
                    @csrf
                    <div class="card-header">
                        <h4>Form Jurusan</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Jurusan</label>
                            <input type="text" class="form-control" name="nama_jurusan" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('jurusan.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
