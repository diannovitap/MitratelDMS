<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class permohonan_pasang_baru extends Model
{
    use HasFactory;
    protected $table = 'permohonan_pasang_barus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nomorSurat',
        'tujuan',
        'kepada',
        'pst',
        'namaPelanggan',
        'IDpelanggan',
        'idSite',
        'namaSite',
        'alamat',
        'keterangan',
        'tagihanlistrik',
    ];
    public $timestamps = true;
}
