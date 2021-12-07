@extends('layout.master')
@section('title', 'Surat Menikah')
@section('header', 'Pengajuan Surat Pengantar Menikah')
@section('content')
<div class="card">
    <form action="{{ route('post-suratmenikahPengguna') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card-header">
                    <h4>Form Bayi</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control form-control-sm">
                    </div>
                    <button type="submit" class="btn btn-primary">Buat</button>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card-header">
                    <h4>Form Ayah</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">tanggal</label>
                        <input type="date" name="tgl" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card-header">
                    <h4>Form Ibu</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Calon istri</label>
                        <input type="text" name="calon_istri" class="form-control form-control-sm">
                    </div>    
                </div>
            </div>
        </div>
    </form>
</div>
@endsection