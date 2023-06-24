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
                        <a class="columns-panel-item columns-panel-item-link" href="{{ route('form-pendaftaran.ortu') }}">
                            <div class="d-flex align-items-center">
                                <i class="feather font-size-lg icon-user"></i>
                                <span class="ms-3">Keterangan Orang Tua</span>
                            </div>
                        </a>
                        <a class="columns-panel-item columns-panel-item-link active"
                            href="{{ route('form-pendaftaran.wali') }}">
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
                                <h4>Identitas Wali</h4>
                                <p>Basic info, like your name and address on this account.</p>
                            </div>
                            <a href="javascript:void(0)" type="button" class="btn btn-primary"
                                onclick="event.preventDefault(); document.getElementById('form-wali').submit();">Simpan</a>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <form id="form-wali" action="{{ route('waliSantri.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="py-4">Nama Lengkap Wali</th>
                                                <td class="py-4">
                                                    <input type="text" class="form-control" name="nama_wali"
                                                        value="{{ $wali?->nama_wali }}" placeholder="Nama Lengkap Wali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">No. Identitas Wali</th>
                                                <td class="py-4">
                                                    <input type="text" class="form-control" name="identitas_wali"
                                                        value="{{ $wali?->identitas_wali }}"
                                                        placeholder="No. Identitas Wali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Tempat & Tanggal Lahir</th>
                                                <td class="py-4">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control"
                                                                name="tempat_lahir_wali"
                                                                value="{{ $wali?->tempat_lahir_wali }}"
                                                                placeholder="Tempat Lahir">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" class="form-control" name="tgl_lahir_wali"
                                                                value="{{ $wali?->tgl_lahir_wali }}"
                                                                placeholder="Tanggal Lahir">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Alamat Lengkap</th>
                                                <td class="py-4">
                                                    <textarea class="form-control" name="alamat_wali" aria-label="With textarea">{{ $wali?->alamat_wali }}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Email</th>
                                                <td class="py-4">
                                                    <input type="email" class="form-control" name="email_wali"
                                                        value="{{ $wali?->email_wali }}" placeholder="Email Wali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">No. HP</th>
                                                <td class="py-4">
                                                    <input type="text" class="form-control" name="nohp_wali"
                                                        value="{{ $wali?->nohp_wali }}" placeholder="No. HP Wali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Status Wali Sebagai</th>
                                                <td class="py-4">
                                                    <select id="inputState" name="status_wali" class="form-select">
                                                        <option value="">Pilih Status Wali</option>
                                                        <option value="1"
                                                            {{ $wali?->status_wali == 1 ? 'selected' : '' }}>Ayah</option>
                                                        <option value="2"
                                                            {{ $wali?->status_wali == 2 ? 'selected' : '' }}>Ibu</option>
                                                        <option value="3"
                                                            {{ $wali?->status_wali == 3 ? 'selected' : '' }}>Saudara
                                                            Kandung</option>
                                                        <option value="4"
                                                            {{ $wali?->status_wali == 4 ? 'selected' : '' }}>Paman</option>
                                                        <option value="5"
                                                            {{ $wali?->status_wali == 5 ? 'selected' : '' }}>Bibi</option>
                                                        <option value="6"
                                                            {{ $wali?->status_wali == 6 ? 'selected' : '' }}>Lainnya
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Pendidikan</th>
                                                <td class="py-4">
                                                    <input type="text" class="form-control" name="pendidikan_wali"
                                                        value="{{ $wali?->pendidikan_wali }}"
                                                        placeholder="Pendidikan Wali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Pekerjaan</th>
                                                <td class="py-4">
                                                    <input type="text" class="form-control" name="pekerjaan_wali"
                                                        value="{{ $wali?->pekerjaan_wali }}"
                                                        placeholder="Pekerjaan Wali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-4">Pendapatan Perbulan</th>
                                                <td class="py-4">
                                                    <input type="text" class="form-control"
                                                        value="{{ $wali?->pendapatan_wali }}" name="pendapatan_wali"
                                                        placeholder="Pendapatan Perbulan">
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
