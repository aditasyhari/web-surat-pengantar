@extends('layout.master')
@section('title', 'Detail Surat')
@section('header', 'Detail Surat')
@section('content')
<div class="card">
    <div class="card-body">
        {{ $nama[0]->nama_bayi }}
        {{ $nama[0]->nama_ayah }}
        {{ $nama[0]->nama_ibu }}
        {{ $surat_masuk->kode_surat }}
    </div>
</div>
@endsection