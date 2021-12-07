<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Suratkelahiran;
use App\Suratmasuk;

class suratKelahiranController extends Controller
{

    // admin
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.suratKelahiran');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bayi' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required'
        ]);
        
        $date = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $year = date('Y');
        $kodesurat = DB::table('tb_suratmasuk')->max('kode_surat');
        $urutan = (int) substr($kodesurat, 6, 6);
        $urutan++;
        $huruf = '474.1/';
        $kodesurat = $huruf.sprintf('%02s',$urutan);
        $kodeinstansi = $kodesurat."/429.502.02/$year";
        
        Suratmasuk::insert([
            'kode_surat' => $kodeinstansi,
            'jenis_surat' => 'Surat Kelahiran',
            'tanggal_pembuatan' => $date,
            'waktu' => date('H:i:s')
        ]);
        
        Suratkelahiran::create($request->all());
        return redirect()->route('pengajuansuratAdmin')->with('success', 'Data Berhasil di Buat');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
