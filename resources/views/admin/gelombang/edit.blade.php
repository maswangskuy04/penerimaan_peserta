@extends('layout.app')
@section('title', 'Edit gelombang')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('gelombangs.update', $edit->id) }}" method="POST">
                    @csrf
                    <div class="card-header">
                        <h4>Form Edit Gelombang</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Gelombang</label>
                            <input type="text" class="form-control" name="nama_gelombang" value="{{ $edit->nama_gelombang }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Perbarui</button>
                        <a href="{{ route('gelombangs.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
