@extends('admin.layout.appadmin')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @foreach ($biaya as $b)
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-center py-3">
                    <h2 class="h5 mb-0"><a href="#" class="text-muted"></a>{{ $b->id }}</h2>
                </div>
                <!-- Main content -->
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Details -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3 d-flex justify-content-between">
                                    <div>
                                        <span class="me-3">{{ $b->tgl_pembayaran }}</span>
                                    </div>
                                    <div class="d-flex">
                                        <button class="btn btn-link p-0 me-3 d-none d-lg-block btn-icon-text"><i
                                                class="bi bi-download"></i> <span class="text">Invoice</span></button>
                                        <div class="dropdown">
                                            <button class="btn btn-link p-0 text-muted" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i>
                                                        Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-printer"></i>
                                                        Print</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-borderless">
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">Tanggal Pendaftaran</td>
                                            <td class="text-end">{{ $b->tanggal }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Status Pembayaran</td>
                                            <td class="text-danger text-end">{{ $b->status_pembayaran }}</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">Jumlah Pembayaran</td>
                                            <td class="text-end">{{ $b->jml_pembayaran }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- Payment -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3 class="h6">Payment Method</h3>
                                        <p>Visa -1234 <br>
                                            Total: {{ $b->jml_pembayaran }} <span </div>
                                                <div class="col-lg-6">
                                                    <h3 class="h6">Billing address</h3>
                                                    <address>
                                                        <strong>{{ $b->nama_santri }}</strong><br>
                                                        {{ $b->alamat_santri }}<br>
                                                        <abbr title="Phone">{{ $b->no_hp_santri }}
                                                    </address>
                                                </div><br>   
                                        <a href="{{url('admin/biaya')}}">
                                            <button class="btn btn-primary btn-md">Back</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
