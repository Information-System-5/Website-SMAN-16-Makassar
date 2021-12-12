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

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        }
    }
}
