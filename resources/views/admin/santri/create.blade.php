@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Form Tambah Data Santri</h1><br>
<form method="post" action="{{url('admin/santri/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="card-body">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">NISN</label> 
    <div class="col-8">
      <input id="text1" name="nisn" type="text" class="form-control" placeholder="Masukkan NISN">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_0" type="radio" class="custom-control-input" value="L"> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_1" type="radio" class="custom-control-input" value="P"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">No HP</label> 
    <div class="col-8">
      <input id="text" name="no_hp" type="number" class="form-control" placeholder="Masukkan Nomor HP">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text2" name="email" type="email" class="form-control" placeholder="Masukkan Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Orang Tua</label> 
    <div class="col-8">
      <select id="select" name="orangtua_id" class="custom-select">
        @foreach($orangtua as $ortu)
        <option value="{{$ortu->id}}">{{$ortu->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Jenjang Pendidikan</label> 
    <div class="col-8">
      <select id="select1" name="jenjang_id" class="custom-select">
        @foreach($jenjang as $j)
        <option value="{{$j->id}}">{{$j->jenjang}}</option>
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