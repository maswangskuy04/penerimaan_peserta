@extends('layout.app')

@section('title', 'Peserta Pelatihan Page')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jurusan</th>
                                    <th>Gelombang</th>
                                    <th>Nama Lengkap</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesertas as $key => $peserta)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $peserta->jurusan->nama_jurusan }}</td>
                                        <td>{{ $peserta->gelombang->nama_gelombang }}</td>
                                        <td>{{ $peserta->nama_lengkap }}</td>
                                        <td>
                                            <select name="status" class="form-control select2"
                                                id="status-{{ $peserta->id }}" data-id="{{ $peserta->id }}">
                                                <option value="">-- Pilih Status --</option>
                                                <option value="1" {{ $peserta->status == 1 ? 'selected' : '' }}>TIDAK
                                                    LULUS</option>
                                                <option value="2" {{ $peserta->status == 2 ? 'selected' : '' }}>
                                                    CADANGAN</option>
                                                <option value="3" {{ $peserta->status == 3 ? 'selected' : '' }}>LULUS
                                                </option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('peserta-pelatihan.show', $peserta->id) }}"
                                                class="btn btn-warning">Detail</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('peserta-pelatihan.destroy', $peserta->id) }}"
                                                method="post" class="text-center">
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
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const itemStatus = document.querySelectorAll('.form-control');
            itemStatus.forEach(status => {
                status.addEventListener('change', (event) => {
                    const itemId = event.target.getAttribute('data-id');
                    const statusValue = event.target.value;
                    const csrfToken = document.querySelector('meta[name="csrf-token"]')
                        .getAttribute('content');

                    fetch(`peserta-pelatihan/update-status/${itemId}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                            },
                            body: JSON.stringify({
                                status: statusValue
                            })
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (statusValue == 1) {
                                Swal.fire({
                                    title: 'TIDAK LULUS!',
                                    text: 'Mantap Tidak Lulus',
                                    icon: 'error'
                                })
                            }
                            if (statusValue == 2) {
                                Swal.fire({
                                    title: 'CADANGAN!',
                                    text: 'Mantap Cadangan',
                                    icon: 'warning'
                                })
                            }
                            if (statusValue == 3) {
                                Swal.fire({
                                    title: 'LULUS!',
                                    text: 'Mantap Lulus',
                                    icon: 'success'
                                })
                            }
                            console.log(statusValue);

                        })
                })
            })
        })
    </script>
@endsection
