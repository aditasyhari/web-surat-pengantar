<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Suratmasuk extends Model
{
    protected $table = 'tb_suratmasuk';
    protected $fillabele = ['kode_surat', 'jenis_surat', 'tanggal_pembuatan', 'waktu'];
}

