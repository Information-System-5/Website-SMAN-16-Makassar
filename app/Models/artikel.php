<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;
    protected $fillable = ['judul_artikel', 'penulis_artikel', 'isi_artikel', 'gambar_artikel', 'waktu_dibuat_artikel'];

    public function getRouteKeyName()
    {
        return 'judul_artikel';
    }
}
