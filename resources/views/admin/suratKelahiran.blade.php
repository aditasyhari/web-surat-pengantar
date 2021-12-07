@extends('layout.master')
@section('title', 'Surat Kelahiran')
@section('header', 'Pembuatan Surat Kelahiran')
@section('content')
<div class="card">
    <form action="{{ route('post-suratkelahiran') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card-header">
                    <h4>Form Bayi</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama_bayi" class="form-control form-control-sm">
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
                        <label for="">Nama</label>
                        <input type="text" name="nama_ayah" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card-header">
                    <h4>Form Ibu</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama_ibu" class="form-control form-control-sm">
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
</div>
@endsection