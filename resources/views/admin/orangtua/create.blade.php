@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Form Tambah Data Orang Tua</h1><br>
<form method="post" action="{{url('admin/orangtua/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="card-body">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">No HP</label> 
    <div class="col-8">
      <input id="text" name="no_hp" type="number" class="form-control" placeholder="Masukkan Nomor HP">
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Pekerjaan</label> 
    <div class="col-8">
      <input id="text4" name="pekerjaan" type="text" class="form-control">
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