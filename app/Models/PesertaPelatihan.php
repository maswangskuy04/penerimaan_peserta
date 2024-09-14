<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gelombangs;

class PesertaPelatihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jurusan',
        'id_gelombang',
        'nama_lengkap',
        'nik',
        'kartu_keluarga',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan_terakhir',
        'nama_sekolah',
        'kejuruan',
        'no_hp',
        'email',
        'aktivitas_saat_ini',
        'status'
    ];
    public function gelombang()
    {
        return $this->belongsTo(Gelombangs::class, 'id_gelombang', 'id');
    }
}
