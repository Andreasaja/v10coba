<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slipgaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'periode',
        'kode',
        'nama',
        'perusahaan',
        'email',
        'gapok',
    ];
}
