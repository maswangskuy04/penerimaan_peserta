@extends('layout.app')
@section('title', 'Detail Peserta Page')
@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Status</th>
                    <td>
                        @if ($peserta->status == 1)
                            <div class="badge badge-danger">TIDAK LULUS</div>
                        @elseif ($peserta->status == 2)
                            <div class="badge badge-warning">CADANGAN</div>
                        @else
                            <div class="badge badge-success">LULUS</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $peserta->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $peserta->email }}</td>
                </tr>
                <tr>
                    <th>Nomor HP</th>
                    <td>{{ $peserta->no_hp }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $peserta->nik }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $peserta->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $peserta->tempat_lahir }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ date('d-m-Y', strtotime($peserta->tanggal_lahir)) }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>{{ $peserta->pendidikan_terakhir }}</td>
                </tr>
                <tr>
                    <th>Nama Sekolah</th>
                    <td>{{ $peserta->nama_sekolah }}</td>
                </tr>
                <tr>
                    <th>Aktivitas Saat Ini</th>
                    <td>{{ $peserta->aktivitas_saat_ini }}</td>
                </tr>
                <tr>
                    <th>Gelombang</th>
                    <td>{{ $peserta->gelombang->nama_gelombang }}</td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>{{ $peserta->jurusan->nama_jurusan }}</td>
                </tr>
                <tr>
                    <th>Kartu Keluarga</th>
                    <td>{{ $peserta->kartu_keluarga }}</td>
                </tr>
            </table>

            <a href="{{ route('peserta-pelatihan.index') }}" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary mx-3">Update Peserta</button>
            </form>
        </div>
    </div>

@endsection
