@extends('layout.app')

@section('title', 'Tambah Level Page')

@section('content')
    <div class="col-sm-12 col-xl-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Form Tambah Level</h6>
            <form action="{{ route('level.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama Level</label>
                    <select name="nama_level" id="" class="form-select">
                        <option value=""></option>
                        @foreach ($levels as $level)
                            <option value="{{ $level->id }}">{{ $level->nama_level }}</option>
                        @endforeach
                    </select>

                </div>
                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
            </form>
        </div>
    </div>
@endsection
