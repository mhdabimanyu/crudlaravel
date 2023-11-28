

@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>welcome to my Dashboard form</p>
<div class="alert alert-info  d-flek"  >
    <!-- <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i> -->
                <marquee >pastikan data terinput dan lanjut edit dan hapus data</marquee>     
            </div>
<div class="card">
  <div class="card-header text-center">
    <h4><b>FORM</b></h4>
  </div>
  
  <div class="card-body">
  <form action="/siswa/store" method="post">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">nama</label>
    <input type="text"  class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="nama">
    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">kelas</label>
    <input type="text"  class="form-control" name="kelas" id="kelas" placeholder="kelas">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">jurusan</label>
    <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="jurusan">
  </div>
 
 <div class="form">
  <label for="">foto</label>
  <input type="file" name="profile_image" class="form-control" >
 </div>
<br>
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>
  </div>
</div>

@stop



