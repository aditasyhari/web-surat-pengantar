<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkelahiran extends Model
{
    protected $table = 'tb_suratkelahiran';
    protected $fillable = ['nama_bayi', 'nama_ayah', 'nama_ibu', 'file'];
}
