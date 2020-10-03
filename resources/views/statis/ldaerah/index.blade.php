@extends('layouts.master')

@section('content')
<div class="main">    
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> 




                    <div class="row">
                        <div class="col">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Luas Daerah/Wilayah</h3>         
                                    <div class="right">                                        
                                        <a href="/statis/ldaerah/add" class="btn btn-success btn-sm">Tambah Data</a>                                        
                                    </div>                           
                                </div>
                                
                                <div class="panel-body">                            
                                    <table class="table table-hover" id="datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal</th>     
                                            <th scope="col">Periode</th>     
                                            <th scope="col">Aksi</th>                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                             (isset($_GET["page"])) ? ($_GET["page"] == 1) ? $i = $_GET["page"] : $i = $_GET["page"] + 1 : $i = 1                                             
                                            @endphp
                                            @foreach ($ldaerah as $l)        
                                            <tr>
                                                <th scope="row">{{$i++}}</th>
                                                <td><a href="/statis/ldaerah/{{$l->id}}/viewdata">{{date_format(date_create($l->tanggal),"d F Y")}}</a></td>            
                                                <td><a href="/statis/ldaerah/{{$l->id}}/viewdata">{{$l->semester}}</a></td>            
                                                <td>
                                                    <a href="/statis/ldaerah/{{$l->id}}/viewdata" class="btn btn-primary btn-sm">View</a>
                                                    <a href="/statis/ldaerah/{{$l->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/statis/ldaerah/{{$l->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus?')">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$ldaerah->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
















                    




                </div>
            </div>
        </div>
    </div>
</div>
@endsection