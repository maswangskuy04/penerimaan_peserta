@extends('layout.app')
@section('title', 'Add User Page')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="card-header">
                        <h4>Form User</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Level</label>
                            <select name="id_level" class="form-control">
                                <option value="">-- Pilih Level --</option>
                                @foreach ($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->nama_level }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group mb-0">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('user.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
