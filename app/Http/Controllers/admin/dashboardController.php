<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Suratkelahiran;
use App\Suratkematian;
use App\Suratnikah;

class dashboardController extends Controller
{
    public function index()
    {
        $suratkelahiran = DB::table('tb_suratkelahiran')->get();
        $count_suratkelahiran = $suratkelahiran->count();

        $suratkematian = DB::table('tb_suratkematian')->get();
        $count_suratkematian = $suratkematian->count();

        $suratmenikah = DB::table('tb_suratmenikah')->get();
        $count_suratmenikah = $suratmenikah->count();

        return view('admin.dashboard', compact(['count_suratkelahiran', 'count_suratkematian', 'count_suratmenikah']));
    }
}
