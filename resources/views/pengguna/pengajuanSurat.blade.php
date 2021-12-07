@extends('layout.master')
@section('title', 'Buat Surat')
@section('header', 'Buat Surat Pengguna')
@section('content')
<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="form-group">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        Data Berhasil di Buat !
                    </div>
                </div>
                {{ session('status') }}
                </div>
            @endif
            <label for="">Pilih Jenis Surat</label>
            <form action="#" method="get" id="select">
                <div class="input-group shadow">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                    </div>
                    <select name="jenisSurat" class="form-control">
                        <option selected disabled>-Silahkan Pilih-</option>
                        <option value="{{ route('suratmenikahPengguna') }}">Surat Pengantar Nikah</option>
                        <option value="{{ route('suratkelahiranPengguna') }}">Surat Pengantar Kelahiran</option>
                        <option value="{{ route('suratkematianPengguna') }}">Surat Pengantar Kematian</option>
                    </select>
                </div>
                <button type="sumbit" class="btn btn-primary btn-lg shadow mt-4">Buat</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById('select').jenisSurat.onchange = function() {
        let newaction = this.value;
        document.getElementById('select').action = newaction;
    };
</script>
@endsection