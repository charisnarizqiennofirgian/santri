@extends('admin.layout.appadmin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Santri</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Santri</h6>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{url('admin/santri/create')}}" class="btn btn-primary btn-sm"> Tambah </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>No Hp</th>
                            <th>email</th>
                            <th>Orang Tua</th>
                            <th>Jenjang Pendidikan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>No Hp</th>
                            <th>email</th>
                            <th>Orang Tua</th>
                            <th>Jenjang Pendidikan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($datas as $s)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$s->nisn}}</td>
                            <td>{{$s->nama_lengkap}}</td>
                            <td>{{$s->alamat_lengkap}}</td>
                            <td>{{$s->jenis_kelamin}}</td>
                            <td>{{$s->no_hp}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->wali?->nama_wali}}</td>
                            <td>Jenjang</td>
                            <td>
                                <form action="#" method="POST">
                                    <!-- {{-- tombol edit --}} -->
                                    <a href="{{url('admin/santri/edit/'.$s->id)}}" class="btn btn-primary btn-circle">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <!-- {{-- tombol info --}} -->
                                    <a class="btn btn-warning btn-circle" href="{{url('admin/santri/show/'.$s->id)}}">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <!-- {{-- tombol hapus --}} -->
                                    <button type="submit" class="btn btn-danger btn-circle" name="proses" value="hapus"
                                        onclick="return confirm('Anda yakin akan dihapus?')"> <i class="fas fa-trash"></i></button>
                                        <input type="hidden" name="idx" value="">
                                        </a>
                                    </form>
                            </td>
                        </tr>
                        @php
                            $no++
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
