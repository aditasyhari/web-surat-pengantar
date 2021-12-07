<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmenikah extends Model
{
    protected $table = 'tb_suratmenikah';
    protected $fillable = ['nama', 'tgl', 'calon_istri'];
}
