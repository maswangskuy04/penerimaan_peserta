@extends('layout.app')
@section('title', 'Peserta Pelatihan')
@section('content')

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-2">Table Peserta Pelatihan</h6>
        <a href="{{ route('pesertaPelatihan.create') }}" class="btn btn-outline-info btn-sm my-2">Tambah Peserta Pelatihan</a>
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th scope="col">ID Jurusan</th>
                        <th>ID Gelombang</th>
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
                    @foreach ($pesertapelatihan as $key => $pp)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $pp->id_jurusan }}</td>
                            <td>{{ $pp->id_gelombang }}</td>
                            <td>{{ $pp->nama_lengkap }}</td>
                            <td>{{ $pp->nik }}</td>
                            <td>{{ $pp->kartu_keluarga }}</td>
                            <td>{{ $pp->jenis_kelamin }}</td>
                            <td>{{ $pp->tempat_lahir }}</td>
                            <td>{{ $pp->tanggal_lahir }}</td>
                            <td>{{ $pp->pendidikan_sekolah }}</td>
                            <td>{{ $pp->nama_sekolah }}</td>
                            <td>{{ $pp->kejuruan }}</td>
                            <td>{{ $pp->nomor_hp }}</td>
                            <td>{{ $pp->email }}</td>
                            <td>{{ $pp->aktivitas_saat_ini }}</td>
                            <td>{{ $pp->status }}</td>
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
