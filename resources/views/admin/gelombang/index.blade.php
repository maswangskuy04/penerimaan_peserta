@extends('layout.app')
@section('title', 'Gelombang Page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('gelombangs.create') }}" class="btn btn-outline-info">Tambah Gelombang</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Gelombang</th>
                                    <th>Status</th>
                                    <th class="col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gelombangs as $key => $gelombang)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $gelombang->nama_gelombang }}</td>
                                        <td>
                                            <input type="radio" name="aktif" id="" class="status-radio" data-id="{{ $gelombang->id }}" {{ $gelombang->aktif == 1 ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <a href="{{ route('gelombangs.edit', $gelombang->id) }}"
                                                class="btn btn-outline-secondary btn-sm">Edit</a>
                                            <form action="{{ route('gelombangs.destroy', $gelombang->id) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const statusRadios = document.querySelectorAll('.status-radio');
            statusRadios.forEach(radio => {
                radio.addEventListener('click', (event) => {
                    const itemId = event.target.getAttribute('data-id');
                    const csrfToken = document.querySelector('meta[name="csrf-token"]')
                        .getAttribute('content');

                    fetch(`gelombangs/update-status/${itemId}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: 'Gelombang sudah aktif bosquee',
                                });
                                statusRadios.forEach(r => {
                                    if (r.getAttribute('data-id') != itemId) {
                                        r.checked = false;
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: 'Status gelombang gagal aktif',
                                });
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: 'Status gelombang gagal aktif',
                            });
                        });
                });
            });
        });
    </script>
@endsection
