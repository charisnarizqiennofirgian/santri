@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Form Tambah Pendaftaran</h1><br>
<form method="post" action="{{url('admin/pendaftaran/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="card-body">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Tanggal Pendaftaran</label> 
    <div class="col-8">
      <input id="text1" name="tgl_pendaftaran" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Nama Santri</label> 
    <div class="col-8">
      <select id="select" name="santri_id" class="custom-select">
        @foreach($santri as $s)
        <option value="{{$s->id}}">{{$s->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Status Pendaftaran</label> 
    <div class="col-8">
      <select id="select1" name="status_pendaftaran_id" class="custom-select">
        @foreach($status_pendaftaran as $sp)
        <option value="{{$sp->id}}">{{$sp->status_pendaftaran}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
</div>
</form>
@endsection