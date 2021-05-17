@extends('layout.v_templ')
@section('title','addfile')

@section('content')
    <p class="text-white">Ini adalah Halaman Dashboard untuk col file blum bisa error extension()</p>
    <br>


<form action="/dashboard/addfile" method="POST" enctype="multipart/from-data">
@csrf 
<div class="form-group">
    <label for="exampleInputEmail1">COL1</label>
    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama" value="{{old('nama')}}">
    <div class="invalid-feedback">
        @error('nama')
            {{$message}}
        @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">COL2</label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputPassword1" placeholder="Enter Alamat" value="{{old('alamat')}}">
    <div class="invalid-feedback">
        @error('alamat')
            {{$message}}
        @enderror
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">File</label>
    <input type="file" name="fileeg" class="form-control @error('fileeg') is-invalid @enderror" id="exampleInputPassword1" placeholder="Enter Alamat" value="{{old('alamat')}}">
    <div class="invalid-feedback">
        @error('fileeg')
            {{$message}}
        @enderror
    </div>
  </div> 
  <!-- <div class="form-group">
    <label for="exampleFormControlFile1">File input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fileeg">
    <div class="invalid-feedback">
        @error('alamat')
            {{$message}}
        @enderror
    </div>
  </div> -->

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">File</label>
    <input type="file" name="fileeg" class="form-control" >
    
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection