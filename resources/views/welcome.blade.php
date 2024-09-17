<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Calon Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .description {
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="form-title">Pendaftaran Calon Peserta</h2>
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<body>
    <div class="container">
        <p class="description">
            Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat membuka kembali pelatihan kerja untuk meningkatkan
            kompetensi warga DKI Jakarta agar mampu bersaing di dunia kerja. <br>
            Adapun Pelatihan yang diselenggarakan adalah :
        <ul>
            <li>Operator Komputer</li>
            <li>Bahasa Inggris</li>
            <li>Desain Grafis</li>
            <li>Tata Boga</li>
            <li>Tata Busana</li>
            <li>Tata Graha</li>
            <li>Teknik Pendingin</li>
            <li>Teknik Komputer</li>
            <li>Otomotif Sepeda Motor</li>
            <li>Jaringan Komputer</li>
            <li>Barista</li>
            <li>Bahasa Korea</li>
            <li>Make Up Artist</li>
            <li>Multimedia - Video Editor</li>
            <li>Content Creator</li>
            <li>Web Programming</li>
        </ul>
        Sebelum melanjutkan ke halaman berikutnya, pastikan syarat pendaftaran berikut sudah disiapkan:
        <ul>
            <li>Softcopy KTP DKI Jakarta</li>
            <li>Softcopy Kartu Keluarga</li>
            <li>Softcopy ijazah terakhir</li>
            <li>Softcopy Pas foto 3 x 4 (latar belakang merah)</li>
            <li>Softcopy Sertifikat Vaksin Covid-19</li>
            <li>Surat Keterangan Domisili DKI Jakarta bagi KTP Luar DKI Jakarta</li>
        </ul>
        * Semua persyaratan tersebut diupload di form pendaftaran <br><br>
        Waktu pelatihan: Daftar Segera <br>
        Hari pelatihan: Senin – Jumat <br>
        Pukul: 08.00 – 15.00 WIB <br><br>
        *Keputusan hasil seleksi berlaku mutlak dan tidak bisa diganggu gugat.
        </p>
    </div>
</body>

<body>
    <div class="container mb-3">
        <h2 class="form-title">Data Calon Peserta</h2>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id_jurusan" class="form-label">Jurusan</label>
                <select name="id_jurusan" id="" class="form-select">
                    <option value="">Pilih Jurusan</option>
                    @foreach ($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_gelombang" class="form-label">Gelombang</label>
                <select name="id_gelombang" id="" class="form-select">
                    <option value="">Pilih Gelombang</option>
                    @foreach ($gelombangs as $gelombang)
                        <option value="{{ $gelombang->id }}" {{ $gelombang->aktif == 1 ? '' : 'hidden' }}>{{ $gelombang->nama_gelombang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control" id="nik" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="kartu_keluarga" class="form-label">Kartu Keluarga</label>
                <input type="number" class="form-control" id="kartu_keluarga" name="kartu_keluarga" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="mb-3">
                <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
            </div>
            <div class="mb-3">
                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" required>
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="number" class="form-control" id="nomor_hp" name="no_hp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="aktivitas_saat_ini" class="form-label">Aktivitas Saat Ini</label>
                <input class="form-control" id="aktivitas_saat_ini" name="aktivitas_saat_ini" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
