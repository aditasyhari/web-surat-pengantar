<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayatpengajuan extends Model
{
    protected $table = 'tb_riwayatpembuatan';
    protected $fillabele = ['kode_surat', 'jenis_surat', 'tanggal_pembuatan', 'waktu'];
}
