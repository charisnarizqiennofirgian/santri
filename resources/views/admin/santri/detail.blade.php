@extends('admin.layout.appadmin')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @foreach ($santri as $s)
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-center py-3">
                    <h2 class="h5 mb-0"><a href="#" class="text-muted"></a>{{ $s->id }}</h2>
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
                                            <td colspan="2">NISN</td>
                                            <td class="text-end">{{ $s->nisn }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Nama Santri</td>
                                            <td class="text-end">{{ $s->nama }}</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">Alamat</td>
                                            <td class="text-end">{{ $s->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Jenis Kelamin</td>
                                            <td class="text-end">{{ $s->jk }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">No HP</td>
                                            <td class="text-end">{{ $s->no_hp }}</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">Email</td>
                                            <td class="text-end">{{ $s->email }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Orang Tua</td>
                                            <td class="text-end">{{ $s->nama_ortu }}</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">jenjang Pendidikan</td>
                                            <td class="text-end">{{ $s->jenjang }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <a href="{{url('admin/santri')}}">
                            <button class="btn btn-primary btn-md">Back</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
