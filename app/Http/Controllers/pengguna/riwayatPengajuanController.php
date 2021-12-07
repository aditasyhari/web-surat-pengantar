<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Riwayatpengajuan;

class riwayatPengajuanController extends Controller
{
    public function index()
    {
        $data = Riwayatpengajuan::all()->sortByDesc('waktu');
        return view('pengguna.riwayatPengajuan', compact(['data']));
    }
}
