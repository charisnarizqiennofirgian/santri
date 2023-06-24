@extends('admin.layout.appadmin')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @foreach ($jenjang as $j)
                <!-- Title -->
                <div class="d-flex justify-content-between align-items-center py-3">
                    <h2 class="h5 mb-0"><a href="#" class="text-muted"></a>{{ $j->id }}</h2>
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
                                            <td colspan="2">Jenjang Pendidikan</td>
                                            <td class="text-end">{{ $j->jenjang }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Tahun Ajaran</td>
                                            <td class="text-end">{{ $j->thn_ajaran }}</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">Kuota</td>
                                            <td class="text-end">{{ $j->kuota }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <a href="{{url('admin/jenjang')}}">
                            <button class="btn btn-primary btn-md">Back</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
