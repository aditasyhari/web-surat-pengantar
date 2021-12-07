<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pengajuanSuratController extends Controller
{
    public function index()
    {
        return view('admin.pengajuanSurat');
    }
}
