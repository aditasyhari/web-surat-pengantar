<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkematian extends Model
{
    protected $table = 'tb_suratkematian';
    protected $fillable = ['nama', 'tgl_lahir', 'jenis_kelamin'];
}
