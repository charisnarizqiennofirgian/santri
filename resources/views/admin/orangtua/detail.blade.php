@extends('admin.layout.appadmin')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @foreach ($orangtua as $o)
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-center py-3">
                    <h2 class="h5 mb-0"><a href="#" class="text-muted"></a>{{ $o->id }}</h2>
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
                                            <td colspan="2">Nama</td>
                                            <td class="text-end">{{ $o->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">No HP</td>
                                            <td class="text-end">{{ $o->no_hp }}</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">Alamat</td>
                                            <td class="text-end">{{ $o->alamat }}</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">Pekerjaan</td>
                                            <td class="text-end">{{ $o->pekerjaan }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <a href="{{url('admin/orangtua')}}">
                            <button class="btn btn-primary btn-md">Back</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
