@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Form Tambah Data Jenjang Pendidikan</h1><br>
<form method="post" action="{{url('admin/jenjang/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="card-body">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jenjang Pendidikan</label> 
    <div class="col-8">
      <input id="text1" name="jenjang" type="text" class="form-control" placeholder="Masukkan Jenjang Pendidikan">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tahun Ajaran</label> 
    <div class="col-8">
      <input id="text" name="thn_ajaran" type="text" class="form-control" placeholder="Masukkan Tahun Ajaran">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Kuota</label> 
    <div class="col-8">
      <input id="text4" name="kuota" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
</form>
@endsection