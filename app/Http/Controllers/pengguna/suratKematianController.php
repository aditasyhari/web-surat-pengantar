<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Suratkematian;
use App\Suratmasuk;
use App\Riwayatpengajuan;
use Illuminate\Support\Carbon;

class suratKematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengguna.suratKematian');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $year = date('Y');
        $kodesurat = Suratmasuk::get()->max('kode_surat');
        $urutan = (int) substr($kodesurat, 6, 6);
        $urutan++;
        $huruf = '474.3/';
        $kodesurat = $huruf.sprintf('%02s',$urutan);
        $kodeinstansi = $kodesurat."/429.502.02/$year";

        Suratmasuk::insert([
            'kode_surat' => $kodeinstansi,
            'jenis_surat' => 'Surat Kematian',
            'tanggal_pembuatan' => $date,
            'waktu' => date('H:i:s')
        ]);

        Riwayatpengajuan::insert([
            'kode_surat' => $kodeinstansi,
            'jenis_surat' => 'Surat Kematian',
            'tanggal_pembuatan' => $date,
            'waktu' => date('H:i:s')
        ]);
        
        Suratkematian::create($request->all());
        return redirect()->route('pengajuansuratPengguna')->with('success', 'Data Berhasil di Buat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
