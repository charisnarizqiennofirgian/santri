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
                        <a class="columns-panel-item columns-panel-item-link active"
                            href="{{ route('form-pendaftaran.index') }}">
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
                @include('pendaftar.partials.alert')
                <div class="col">
                    <div class="card-body">
                        <div class="alert alert-danger">
                            Form tidak bisa diubah jika sudah disimpan, harap isi dengan benar!
                        </div>
                        <div class="mb-4 d-md-flex align-items-center justify-content-between">
                            <div>
                                <h4>Personal Information</h4>
                                <p>Basic info, like your name and address on this account.</p>
                            </div>
                            <a href="javascript:void(0)" type="button" class="btn btn-primary"
                                onclick="event.preventDefault(); document.getElementById('form-identitas').submit();">Simpan</a>
                        </div>
                        <div class="row">
                            <div class="col" style="max-width: 200px;">
                                <div class="mb-3">
                                    @if ($santri->foto == null)
                                        <img class="img-fluid w-100 rounded" src="../../assets/images/avatars/thumb-1.jpg"
                                            alt="upload avatar">
                                    @else
                                        <img class="img-fluid w-100 rounded" src="../../storage/{{ $santri->foto }}"
                                            alt="upload avatar">
                                    @endif
                                </div>
                                <form id="form-identitas" action="{{ route('identitasSantri.update', $santri->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="upload upload-text w-100">
                                        <div>
                                            <label for="upload" class="btn btn-secondary w-100">Upload</label>
                                        </div>
                                        <input id="upload" type="file" name="foto" class="upload-input"
                                            accept="image/png, image/jpeg">
                                    </div>
                            </div>
                            <div class="col-md">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th class="py-4">Nama Lengkap</th>
                                            <td class="py-4">
                                                <input type="text" class="form-control" name="nama_lengkap"
                                                    value="{{ $santri->nama_lengkap }}" placeholder="Nama Lengkap">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="py-4">Tempat & Tanggal Lahir</th>
                                            <td class="py-4">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="tempat_lahir"
                                                            value="{{ $santri->tempat_lahir }}" placeholder="Tempat Lahir">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="date" class="form-control" name="tanggal_lahir"
                                                            value="{{ $santri->tanggal_lahir }}"
                                                            placeholder="Tanggal Lahir">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="py-4">Jenis Kelamin</th>
                                            <td class="py-4">
                                                <select id="inputState" class="form-select" name="jenis_kelamin">
                                                    <option value="">Pilih Jenis Kelmain</option>
                                                    <option value="L"
                                                        {{ $santri->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki
                                                    </option>
                                                    <option value="P"
                                                        {{ $santri->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="py-4">Alamat Lengkap</th>
                                            <td class="py-4">
                                                <textarea class="form-control" name="alamat_lengkap" aria-label="With textarea">{{ $santri->alamat_lengkap }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="py-4">Email</th>
                                            <td class="py-4">
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ $santri->email }}" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="py-4">No. HP</th>
                                            <td class="py-4">
                                                <input type="text" class="form-control" name="no_hp"
                                                    value="{{ $santri->no_hp }}" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="py-4">Jumlah Saudara & Anek Ke</th>
                                            <td class="py-4">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="jumlah_saudara"
                                                            value="{{ $santri->jumlah_saudara }}"
                                                            placeholder="Jumlah Saudara">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="anak_ke"
                                                            value="{{ $santri->anak_ke }}" placeholder="Anake Ke">
                                                    </div>
                                                </div>
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
