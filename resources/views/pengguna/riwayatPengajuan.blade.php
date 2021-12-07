@extends('layout.master')
@section('title', 'Riwayat Pengajuan')
@section('header', 'Riwayat Pengajuan Surat')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Tabel Data</h4>
                <div class="card-header-form">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Surat</th>
                                <th>Kode Surat</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                            @foreach($data as $table)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $table->jenis_surat }}</td>
                                <td>{{ $table->kode_surat }}</td>
                                <td>{{ $table->tanggal_pembuatan }}</td>
                                <td><a href="#" class="badge badge-danger">Proses</a></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('table')
<script src="{{ asset('template/assets/js/page/components-table.js') }}"></script>
@endpush