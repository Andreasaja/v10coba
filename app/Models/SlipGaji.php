<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slipgaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'idxsg',
        'periode',
        'kode',
        'nama',
        'perusahaan',
        'email',
        'gapok',
    ];

    //ini adlh default primary key, yaitu id, jk primary key dlm tabel selain id,
    //maka hrs d tulis sprti d bawah ini, idxsg adlh prmary key nya.
    //hrs d statiskan jk field(kolom) primary key nya bukan id
    protected $primaryKey = 'idxsg';
}
