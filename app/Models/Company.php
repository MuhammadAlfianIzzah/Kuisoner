<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        "nm_company",
        "posisi",
        "jalan_company",
        "kota_company",
        "provinsi_company",
        "email_company",
        "id_mhs"
    ];
}
