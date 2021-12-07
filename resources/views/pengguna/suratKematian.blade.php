@extends('layout.master')
@section('title', 'Surat Kematian')
@section('header', 'Pembuatan Surat Pengantar Kematian')
@section('content')
<div class="card">
    <form action="{{ route('post-suratkematianPengguna') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card-header">
                    <h4>Form</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Orang yang meninggal</label>
                        <input type="text" name="nama" class="form-control form-control-sm">
                    </div>
                    <button type="submit" class="btn btn-primary">Buat</button>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card-header">
                    <h4>Form</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card-header">
                    <h4>Form</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control form-control-sm">
                            <option selected disabled>Pilih</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection