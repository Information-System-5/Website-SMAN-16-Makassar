<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftar extends Model
{
    use HasFactory;
    protected $fillable = ['namaLengkap', 'kelas', 'jenisKelamin', 'tempatLahir', 'tanggalLahir', 'alamatRumah', 'hobi', 'email', 'nomorTelepon', 'pengalamanOrganisasi', 'alasanMasukOrganisasi'];
}
