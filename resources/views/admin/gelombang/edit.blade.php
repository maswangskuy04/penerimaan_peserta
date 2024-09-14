@extends('layout.app')
@section('title', 'Edit gelombang')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('gelombangs.update', $edit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama">Nama Gelombang</label>
            <input class="form-control" type="text" name="nama_jurursan" id="nama_jurursan" required value="{{ $edit->nama_jurursan }}">
        </div>
        <div class="mb-3">
            <label for="nama">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="aktif" id="aktif0" value="0" required>
                <label class="form-check-label" for="aktif0">Tidak Aktif</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="aktif" id="aktif1" value="1" required>
                <label class="form-check-label" for="aktif1">Aktif</label>
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Perbarui</button>
            <a href="{{ url('gelombang.index') }}" class="btn btn-outline-danger btn-sm">Back</a>
        </div>
    </form>

@endsection
