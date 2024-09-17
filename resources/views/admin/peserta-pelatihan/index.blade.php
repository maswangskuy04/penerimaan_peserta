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
                                    <th>NIK</th>
                                    <th>Kartu Keluarga</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Nama Sekolah</th>
                                    <th>Nomor Hp</th>
                                    <th>Email</th>
                                    <th>Aktivitas Saat Ini</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                    <th class="col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesertas as $key => $peserta)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $peserta->jurusan->nama_jurusan }}</td>
                                        <td>{{ $peserta->gelombang->nama_gelombang }}</td>
                                        <td>{{ $peserta->nama_lengkap }}</td>
                                        <td>{{ $peserta->nik }}</td>
                                        <td>{{ $peserta->kartu_keluarga }}</td>
                                        <td>{{ $peserta->jenis_kelamin }}</td>
                                        <td>{{ $peserta->tempat_lahir }}</td>
                                        <td>{{ $peserta->tanggal_lahir }}</td>
                                        <td>{{ $peserta->pendidikan_terakhir }}</td>
                                        <td>{{ $peserta->nama_sekolah }}</td>
                                        <td>{{ $peserta->nomor_hp }}</td>
                                        <td>{{ $peserta->email }}</td>
                                        <td>{{ $peserta->aktivitas_saat_ini }}</td>
                                        <td></td>
                                        <td>
                                            <a href="" class="btn btn-warning">Detail</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('peserta-pelatihan.destroy', $peserta->id) }}"
                                                method="post" class="d-inline">
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
