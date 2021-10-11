<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracer extends Model
{
    protected $fillable = ["keterangan"];
    use HasFactory;
}
