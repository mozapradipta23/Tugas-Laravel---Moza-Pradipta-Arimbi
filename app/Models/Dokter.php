<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table      = 'dokter';
    protected $primaryKey = 'id_dokter';
    public $timestamps    = false;

    protected $fillable = [
        'nama_dokter',
        'tempat_lahir',
        'tanggal_lahir',
        'no_sip',
        'spesialisasi',
        'id_poli',
        'kontak',
        'email',
    ];

    public const DAFTAR_POLI = [
        1 => 'Poli Umum',
        2 => 'Poli Gigi',
        3 => 'Poli Anak',
        4 => 'Poli Penyakit Dalam',
    ];
}