@extends('pendaftar.layout.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Form Pendaftaran</h4>
        <div class="breadcrumb">
            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
            <div class="breadcrumb-item"><a href="index.html"> Home </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> From Pendaftaran</a></div>
        </div>
    </div>
    <div class="card">
        <div class="container-fluid">
            <div class="row content-min-height">
                <div class="p-0 column-panel border-end" style="max-width: 230px; min-width: 230px; left: -230px;">
                    <h4 class="mb-3 ms-3 mt-3">Form Pendaftaran</h4>
                    <div class="columns-panel-item-group">
                        <a class="columns-panel-item columns-panel-item-link" href="{{ route('form-pendaftaran.index') }}">
                            <div class="d-flex align-items-center">
                                <i class="feather font-size-lg icon-user"></i>
                                <span class="ms-3">Identitas Calon Santri</span>
                            </div>
                        </a>
                        <a class="columns-panel-item columns-panel-item-link active"
                            href="{{ route('form-pendaftaran.ortu') }}">
                            <div class="d-flex align-items-center">
                                <i class="feather font-size-lg icon-user"></i>
                                <span class="ms-3">Keterangan Orang Tua</span>
                            </div>
                        </a>
                        <a class="columns-panel-item columns-panel-item-link" href="{{ route('form-pendaftaran.wali') }}">
                            <div class="d-flex align-items-center">
                                <i class="feather font-size-lg icon-user"></i>
                                <span class="ms-3">Identitas Wali</span>
                            </div>
                        </a>
                        <a class="columns-panel-item columns-panel-item-link"
                            href="{{ route('form-pendaftaran.dokumen') }}">
                            <div class="d-flex align-items-center">
                                <i class="feather font-size-lg icon-file"></i>
                                <span class="ms-3">Dokumen</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="alert alert-danger">
                            Form tidak bisa diubah jika sudah disimpan, harap isi dengan benar!
                        </div>
                        <div class="mb-4 d-md-flex align-items-center justify-content-between">
                            <div>
                                <h4>Keterangan Orang Tua</h4>
                                <p>Basic info, like your name and address on this account.</p>
                            </div>
                            <a href="javascript:void(0)" type="button" class="btn btn-primary"
                                onclick="event.preventDefault(); document.getElementById('form-ortu').submit();">Simpan</a>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <form id="form-ortu" action="{{ route('ortuSantri.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="py-4">Nama Lengkap Ayah & Ibu</th>
                                                <td class="py-4">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="nama_ayah"
                                                                value="{{ $ortu?->nama_ayah }}" placeholder="Nama Ayah">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="nama_ibu"
                                                                value="{{ $ortu?->nama_ibu }}" placeholder="Nama Ibu">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Pendidikan Ayah & Ibu</th>
                                                <td class="py-4">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control"
                                                                name="pendidikan_ayah" value="{{ $ortu?->pendidikan_ayah }}"
                                                                placeholder="Pendidikan Ayah">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="pendidikan_ibu"
                                                                value="{{ $ortu?->pendidikan_ibu }}"
                                                                placeholder="Pendidikan Ibu">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Pekerjaan Ayah & Ibu</th>
                                                <td class="py-4">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="pekerjaan_ayah"
                                                                value="{{ $ortu?->pekerjaan_ayah }}"
                                                                placeholder="Pekerjaan Ayah">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="pekerjaan_ibu"
                                                                value="{{ $ortu?->pekerjaan_ibu }}"
                                                                placeholder="Pekerjaan Ibu">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Pendapatan / Bulan</th>
                                                <td class="py-4">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control"
                                                                name="pendapatan_ayah"
                                                                value="{{ $ortu?->pendapatan_ayah }}"
                                                                placeholder="Pendapatan Ayah">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control"
                                                                name="pendapatan_ibu"
                                                                value="{{ $ortu?->pendapatan_ibu }}"
                                                                placeholder="Pendapatan Ibu">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Email</th>
                                                <td class="py-4">
                                                    <input type="email" name="email_ortu"
                                                        value="{{ $ortu?->email_ortu }}" class="form-control"
                                                        placeholder="Email Orang Tua">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">No. HP</th>
                                                <td class="py-4">
                                                    <input type="text" class="form-control" name="nohp_ortu"
                                                        value="{{ $ortu?->nohp_ortu }}"" placeholder="No. HP Orang Tua">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
