@extends('layout.app')

@section('title', 'Peserta Pelatihan Page')

@section('content')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-2">Table Peserta Pelatihan</h6>
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th scope="col">Jurusan</th>
                        <th>Gelombang</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Kartu Keluarga</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Nama Sekolah</th>
                        <th>Kejuruan</th>
                        <th>Nomor Hp</th>
                        <th>Email</th>
                        <th>Aktivitas Saat Ini</th>
                        <th>Status</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesertas as $key => $peserta)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $peserta->id_jurusan }}</td>
                            <td>{{ $peserta->id_gelombang }}</td>
                            <td>{{ $peserta->nama_lengkap }}</td>
                            <td>{{ $peserta->nik }}</td>
                            <td>{{ $peserta->kartu_keluarga }}</td>
                            <td>{{ $peserta->jenis_kelamin }}</td>
                            <td>{{ $peserta->tempat_lahir }}</td>
                            <td>{{ $peserta->tanggal_lahir }}</td>
                            <td>{{ $peserta->pendidikan_sekolah }}</td>
                            <td>{{ $peserta->nama_sekolah }}</td>
                            <td>{{ $peserta->kejuruan }}</td>
                            <td>{{ $peserta->nomor_hp }}</td>
                            <td>{{ $peserta->email }}</td>
                            <td>{{ $peserta->aktivitas_saat_ini }}</td>
                            <td>

                            </td>
                            <td>
                                <a href="" class="btn btn-outline-warning btn-sm">Update</a> |
                                <a href="" class="btn btn-outline-danger btn-sm">Danger</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
