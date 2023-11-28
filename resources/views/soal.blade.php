@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>soal</h1>
@stop
@section('content')

<br>
<div class="alert alert-warning  d-flek"  >
    <!-- <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i> -->
                <marquee >pastikan data terinput dan lanjut edit dan hapus data</marquee>     
            </div>
            
<div class="container " style="margin-top:80px">
        <div class="row ">
        <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header text-center h3"  >
               soal
            </div>
            <div class="container-fluid">
            <div class="card-body">
                <a href="/tambahsoal"  class="btn form-group btn-success" ><div class="fas fa-fw fa-plus"></div> Tambah Data</a>
                <a href="" class="btn form-group btn-danger" ><div class="fas fa-fw fa-print"></div>cetak data</a>
                <table class="table table-info border table-hover mt-3" id="myTable">
                <tbody>
                <thead>
                @if ($message = Session::get('susccess'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif

                    <tr>
                    <th >No</th>
                    <th >jenis</th>
                    <th >pilihan</th>
                    <th >kunci</th>
                    <th >Action</th>
                    </tr>
                    <tr>
                    @foreach($soal as $soal)
                </tr>
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $soal -> jenis}}</td>
                <td>{{ $soal -> pilihan}}</td>
                <td>{{ $soal -> kunci}}</td>
            

                <td >
                       <a href="/tampilkandata/edit/" class="btn btn-sm btn-success" role="button"><div class="fas fa-fw fa-edit"></div>Edit</a>
                       <a href="/tampilkandata/hapus/" class="btn btn-sm btn-danger"><div class="fas fa-fw fa-trash"></div>Hapus</a>
                       </td>
                </tr>
  
                @endforeach
                   
                    
                </thead>
                
                
                </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
   
   
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    @include('sweetalert::alert')
    @stop