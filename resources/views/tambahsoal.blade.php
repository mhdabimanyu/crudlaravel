

@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>tambahkan soal</h1>
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
  <form action="/soal/store" method="post">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">jenis</label>
    <input type="text"  class="form-control" name="jenis" id="jenis"  placeholder="jenis">
    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">pilihan</label>
    <input type="text"  class="form-control" name="pilihan" id="jenis" placeholder="pilihan">
  </div>
 
  <div class="mb-3">
    <label for="" class="form-label">kunci</label>
    <input type="text" class="form-control" name="kunci" id="jenis" placeholder="jurusan">
  </div>
 


  <button type="submit"  class="btn btn-primary">Submit</button>
</form>
  </div>
</div>

@stop



