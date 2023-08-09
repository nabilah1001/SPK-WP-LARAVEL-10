<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternatifModel extends Model
{
    protected $table = 'alternatif';
    protected $primaryKey = 'id_alternatif';
    protected $fillable = [
        'nama',
        'usia',
        'sanggar',
        'status',
        'pengalaman',
        'pendidikan',
        'daerah_tari',
        'jumlah_pilihan',
        'biaya',
        'no_telp'
    ];
    public $timestamps = false;
}
