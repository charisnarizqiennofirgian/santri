@extends('pendaftar.layout.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Status Pendaftaran</h4>
        <div class="breadcrumb">
            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
            <div class="breadcrumb-item"><a href="index.html"> Home </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> From Pendaftaran</a></div>
        </div>
    </div>
    <div class="alert alert-warning">
        Halo Pendaftar, Berikut adalah status pendaftaran anda!
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Informasi Status</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td width="25%">Informasi Pendaftar</td>
                            <td><span class="badge bg-success">Lolos</span></td>
                        </tr>
                        <tr>
                            <td width="25%">Dokumen Pendukung</td>
                            <td><span class="badge bg-warning text-dark">Menunggu Verifikasi</span></td>
                        </tr>
                        <tr>
                            <td width="25%">Diterima</td>
                            <td><span class="badge bg-info text-dark">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
