@extends('admin.layout.appadmin')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @foreach ($pendaftaran as $p)
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-center py-3">
                    <h2 class="h5 mb-0"><a href="#" class="text-muted"></a>{{ $p->id }}</h2>
                </div>
                <!-- Main content -->
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Details -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">Tanggal Pendaftaran</td>
                                            <td class="text-end">{{ $p->tgl_pendaftaran }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Nama Santri</td>
                                            <td class="text-end">{{ $p->nama }}</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">Status Pendaftaran</td>
                                            <td class="text-danger text-end">{{ $p->status_pendaftaran }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                Dokumen Pendukung
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td>
                                            List File Pendukung
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <a href="" class="btn btn-success">Terima</a> || <a href="" class="btn btn-danger">Tolak</a>

                        {{-- <a href="{{url('admin/pendaftaran')}}">
                            <button class="btn btn-primary btn-md">Back</button>
                        </a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
