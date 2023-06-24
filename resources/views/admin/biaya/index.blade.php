@extends('admin.layout.appadmin')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel Biaya</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.
        </p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Biaya</h6>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <a href="{{ url('admin/biaya/create') }}" class="btn btn-primary btn-sm"> Tambah </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Jumlah Pembayaran</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($biaya as $b)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $b->tgl_pembayaran }}</td>
                                        <td>{{ $b->jml_pembayaran }}</td>
                                        <td>
                                            @empty($b->bukti_pembayaran)
                                                <img src="{{ url('admin/image/nophoto.png') }}" width="50%">
                                            @else
                                                <img src="{{ url('admin/image') }}/{{ $b->bukti_pembayaran }}" width="50%">
                                            @endempty
                                        </td>
                                        <td>{{ $b->status_pembayaran }}</td>
                                        <td>{{ $b->tanggal }}</td>
                                        <td>
                                            <form action="#" method="POST">
                                                <!-- {{-- tombol edit --}} -->
                                                <a href="{{ url('admin/biaya/edit/'.$b->id) }}"
                                                    class="btn btn-primary btn-circle">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                <!-- {{-- tombol info --}} -->
                                                <a class="btn btn-warning btn-circle"
                                                    href="{{ url('admin/biaya/show/'.$b->id) }}">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <!-- {{-- tombol hapus --}} -->
                                                <button type="button" class="btn btn-circle btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$b->id}}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{$b->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah anda yakin akan menghapus data ? 
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-danger"  href="{{url('admin/biaya/delete/'.$b->id)}}">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
