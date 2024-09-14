@extends('layout.app')
@section('title', 'Gelombang Page')

@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-2">Table Level</h6>
            <a href="{{ route('gelombangs.create') }}" class="btn btn-outline-info btn-sm my-2">Tambah Gelombang</a>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th scope="col">Nama Gelombang</th>
                            <th class="col-2">Aktif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gelombangs as $key => $gelo)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $gelo->nama_gelombang }}</td>
                                <td>{{ $gelo->aktif }}</td>
                                <td class="justify-content-center"><a href="{{ route('gelombangs.edit', $gelo->id) }}"
                                    class="btn btn-outline-warning btn-sm">Update</a> |
                                    <form class="d-inline" action="{{ route('gelombangs.destroy', $gelo->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Danger</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
