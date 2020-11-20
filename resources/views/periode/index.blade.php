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
                                    <h3 class="panel-title">periode</h3>
                                    <div class="right">
                                        <a href="/periode/create" class="btn btn-success btn-sm">Tambah Data</a>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <table class="table table-hover" id="datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tanggal Mulai</th>
                                                <th scope="col">Tanggal Selesai</th>
                                                <th scope="col">Semester</th>
                                                <th scope="col">Periode</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            (isset($_GET["page"])) ? ($_GET["page"] == 1) ? $i = $_GET["page"] : $i =
                                            $_GET["page"] + 1 : $i = 1
                                            @endphp
                                            @foreach ($periode as $p)
                                            <tr>
                                                <th scope="row">{{$i++}}</th>
                                                <td>
                                                    <a href="/periode/{{$p->id}}/show">
                                                        {{date_format(date_create($p->tanggal_mulai),"d-m-Y")}}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="/periode/{{$p->id}}/show">
                                                        {{date_format(date_create($p->tanggal_selesai),"d-m-Y")}}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="/periode/{{$p->id}}/show">
                                                        {{$p->semester}}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="/periode/{{$p->id}}/show">
                                                        {{$p->periode}}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="/periode/{{$p->id}}/show"
                                                        class="btn btn-primary btn-sm">View</a>
                                                    <a href="/periode/{{$p->id}}/edit"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/periode/{{$p->id}}/destroy" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Data akan dihapus?')">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$periode->links()}}
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