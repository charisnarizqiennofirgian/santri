@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Form Tambah Biaya</h1><br>
<form method="post" action="{{url('admin/biaya/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="card-body">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Tanggal Pembayaran</label> 
    <div class="col-8">
      <input id="text1" name="tgl_pembayaran" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jumlah Pembayaran</label> 
    <div class="col-8">
      <input id="text1" name="jml_pembayaran" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Bukti Pembayaran</label> 
    <div class="col-8">
      <input id="text4" name="bukti_pembayaran" type="file" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4">Status Pembayaran</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="status_pembayaran" id="radio_0" type="radio" class="custom-control-input" value="lunas"> 
        <label for="radio_0" class="custom-control-label">Lunas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="status_pembayaran" id="radio_1" type="radio" class="custom-control-input" value="belum lunas"> 
        <label for="radio_1" class="custom-control-label">Belum Lunas</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Tanggal Pendaftaran</label> 
    <div class="col-8">
      <select id="select1" name="pendaftaran_id" class="custom-select">
        @foreach($pendaftaran as $p)
        <option value="{{$p->id}}">{{$p->tgl_pendaftaran}}</option>
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