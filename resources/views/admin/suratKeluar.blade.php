@extends('layout.master')
@section('title', 'Surat Keluar')
@section('header', 'Surat Keluar')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
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
                                <th>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                            class="custom-control-input" id="checkbox-all">
                                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </th>
                                <th>No.</th>
                                <th>Jenis Surat</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><span class="badge badge-success">Selesai</span></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="far fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            
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