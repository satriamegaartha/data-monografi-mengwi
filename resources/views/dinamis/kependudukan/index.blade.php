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
                                    <h3 class="panel-title">Kependudukan</h3>
                                    <div class="right">
                                        <a href="/dinamis/kependudukan/add" class="btn btn-success btn-sm">Tambah
                                            Data</a>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <table class="table table-hover" id="datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Semester</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            (isset($_GET["page"])) ? ($_GET["page"] == 1) ? $i = $_GET["page"] : $i =
                                            $_GET["page"] + 1 : $i = 1
                                            @endphp
                                            @foreach ($kependudukan as $p)
                                            <tr>
                                                <th scope="row">{{$i++}}</th>
                                                <td><a
                                                        href="/dinamis/kependudukan/{{$p->id}}/viewdata">{{date_format(date_create($p->tanggal),"d F Y")}}</a>
                                                </td>
                                                <td><a
                                                        href="/dinamis/kependudukan/{{$p->id}}/viewdata">{{$p->semester}}</a>
                                                </td>
                                                <td>
                                                    <a href="/dinamis/kependudukan/{{$p->id}}/viewdata"
                                                        class="btn btn-primary btn-sm">View</a>
                                                    <a href="/dinamis/kependudukan/{{$p->id}}/edit"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/dinamis/kependudukan/{{$p->id}}/delete"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Data akan dihapus?')">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$kependudukan->links()}}
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