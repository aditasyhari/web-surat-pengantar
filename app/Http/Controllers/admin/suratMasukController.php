<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Suratmasuk;

class suratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Suratmasuk::all()->sortByDesc('waktu');
        return view('admin.suratMasuk', compact(['data']));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_masuk = Suratmasuk::find($id);
        $tb_kelahiran = DB::table('tb_suratkelahiran')
                ->select('nama_bayi', 'nama_ayah', 'nama_ibu')
                ->where('id', $id)
                ->get();
        $tb_kematian = DB::table('tb_suratkematian')
                ->select('nama', 'tgl_lahir', 'jenis_kelamin')
                ->where('id', $id)
                ->get();
        $tb_nikah = DB::table('tb_suratmenikah')
                ->select('nama', 'tgl', 'calon_istri')
                ->where('id', $id)
                ->get();
        return view('admin.show', compact(['surat_masuk', 'tb_kelahiran', 'tb_kematian', 'tb_nikah']));
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
