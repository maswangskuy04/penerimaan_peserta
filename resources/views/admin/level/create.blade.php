@extends('layout.app')

@section('title', 'Tambah Level Page')

@section('content')
<<<<<<< HEAD
    <div class="col-sm-12 col-xl-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Form Tambah Level</h6>
=======
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Tambah Level Form</h6>
>>>>>>> 671ae7349aea329c0caef8715476e966f120d9e0
            <form action="{{ route('level.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama Level</label>
<<<<<<< HEAD
                    <select name="nama_level" id="" class="form-select">
                        <option value=""></option>
                        @foreach ($levels as $level)
                            <option value="{{ $level->id }}">{{ $level->nama_level }}</option>
                        @endforeach
                    </select>

                </div>
                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
=======
                    <input type="text" class="form-control" name="nama_level">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
>>>>>>> 671ae7349aea329c0caef8715476e966f120d9e0
            </form>
        </div>
    </div>
@endsection
