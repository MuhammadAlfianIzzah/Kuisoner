<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'nm_mhs',
        'kd_ptn',
        'thn_lulus',
        'kd_prodi',
        'email',
        'no_hp',
        'nik',
        'npwp'
    ];
    public function TKuisoners()
    {
        return  $this->hasMany(TKuisoner::class, "id_mhs");
    }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters["search"] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where("nim", "like", "%" . $search . "%")->orWhere("nm_mhs", "like", "%" . $search . "%");
            });
        });
        $query->when($filters["kd_prodi"] ?? false, function ($query, $kd_prodi) {
            return $query->where(function ($query) use ($kd_prodi) {
                $query->where("kd_prodi", "like", "%" . $kd_prodi . "%");
            });
        });
    }
}
