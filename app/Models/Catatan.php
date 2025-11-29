<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'judul',
        'isi',
        'kategori',
        'tanggal',
    ];
}
