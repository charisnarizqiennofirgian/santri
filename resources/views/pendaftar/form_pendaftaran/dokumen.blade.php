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
                        <a class="columns-panel-item columns-panel-item-link" href="{{ route('form-pendaftaran.wali') }}">
                            <div class="d-flex align-items-center">
                                <i class="feather font-size-lg icon-user"></i>
                                <span class="ms-3">Identitas Wali</span>
                            </div>
                        </a>
                        <a class="columns-panel-item columns-panel-item-link active"
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
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div>
                                <h4>Upload Dokumen</h4>
                                <p class="mb-0">Unggah dokumen pendukung.</p>
                            </div>
                            <a href="javascript:void(0)" type="button" class="btn btn-primary"
                                onclick="event.preventDefault(); document.getElementById('form-dok').submit();">Simpan</a>
                        </div>
                        <div class="mt-4">
                            <div class="mb-4">
                                <form id="form-dok" action="{{ route('dokSantri.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="mb-3">Personal</h5>
                                    <div class="p-3 border-bottom">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-md-center">
                                                <i class="feather h2 text-primary mb-0 icon-file"></i>
                                                <div class="ms-3">
                                                    <div class="text-dark fw-bolder">Photo 3x4</div>
                                                    <input type="file" name="photo" value="{{ $dokumen?->photo }}"
                                                        class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            @if ($dokumen?->photo != null)
                                                <span class="badge bg-success">Sudah di Upload</span>
                                            @else
                                                <span class="badge bg-danger">Belum di Upload</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-md-center">
                                                <i class="feather h2 text-primary mb-0 icon-file"></i>
                                                <div class="ms-3">
                                                    <div class="text-dark fw-bolder">Kartu Identitas</div>
                                                    <input type="file" class="form-control" name="kartu_identitas"
                                                        value="{{ $dokumen?->kartu_identitas }}" placeholder="">
                                                </div>
                                            </div>
                                            @if ($dokumen?->kartu_identitas != null)
                                                <span class="badge bg-success">Sudah di Upload</span>
                                            @else
                                                <span class="badge bg-danger">Belum di Upload</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-md-center">
                                                <i class="feather h2 text-primary mb-0 icon-file"></i>
                                                <div class="ms-3">
                                                    <div class="text-dark fw-bolder">Akta</div>
                                                    <input type="file" class="form-control" name="akta"
                                                        value="{{ $dokumen?->akta }}," placeholder="">
                                                </div>
                                            </div>
                                            @if ($dokumen?->akta != null)
                                                <span class="badge bg-success">Sudah di Upload</span>
                                            @else
                                                <span class="badge bg-danger">Belum di Upload</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-md-center">
                                                <i class="feather h2 text-primary mb-0 icon-file"></i>
                                                <div class="ms-3">
                                                    <div class="text-dark fw-bolder">Kartu Keluarga</div>
                                                    <input type="file" class="form-control" name="kartu_keluarga"
                                                        value="{{ $dokumen?->kartu_keluarga }}" placeholder="">
                                                </div>
                                            </div>
                                            @if ($dokumen?->kartu_keluarga != null)
                                                <span class="badge bg-success">Sudah di Upload</span>
                                            @else
                                                <span class="badge bg-danger">Belum di Upload</span>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Pendukung</h5>
                                <div class="p-3 border-bottom">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-md-center">
                                            <i class="feather h2 text-primary mb-0 icon-file"></i>
                                            <div class="ms-3">
                                                <div class="text-dark fw-bolder">Ijazah Sebelumnya</div>
                                                <input type="file" class="form-control" name="ijazah"
                                                    value="{{ $dokumen?->ijazah }}" placeholder="">
                                            </div>
                                        </div>
                                        @if ($dokumen?->ijazah != null)
                                            <span class="badge bg-success">Sudah di Upload</span>
                                        @else
                                            <span class="badge bg-danger">Belum di Upload</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="p-3 border-bottom">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-md-center">
                                            <i class="feather h2 text-primary mb-0 icon-file"></i>
                                            <div class="ms-3">
                                                <div class="text-dark fw-bolder">Surat Keterangan Hasil Ujian Nasional
                                                    (SKHUN)</div>
                                                <input type="file" class="form-control" name="skhun"
                                                    value="{{ $dokumen?->skhun }}" placeholder="">
                                            </div>
                                        </div>
                                        @if ($dokumen?->skhun != null)
                                            <span class="badge bg-success">Sudah di Upload</span>
                                        @else
                                            <span class="badge bg-danger">Belum di Upload</span>
                                        @endif
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
