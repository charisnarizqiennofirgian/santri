@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@foreach($jenjang as $j)

<h1 align="center">Form Edit Data Jenjang Pendidikan</h1><br>
<form method="post" action="{{url('admin/jenjang/update')}}" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="card-body">
  <div class="form-group row">
    <input type="hidden" name="id" value="{{$j->id}}" /><br>
    <label for="text1" class="col-4 col-form-label">Jenjang Pendidikan</label> 
    <div class="col-8">
      <input id="text1" name="jenjang" type="text" class="form-control" value="{{$j->jenjang}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tahun Ajaran</label> 
    <div class="col-8">
      <input id="text" name="thn_ajaran" type="text" class="form-control" value="{{$j->thn_ajaran}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Kuota</label> 
    <div class="col-8">
      <input id="text4" name="kuota" type="text" class="form-control" value="{{$j->kuota}}">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</div>
</form>
@endforeach
@endsection