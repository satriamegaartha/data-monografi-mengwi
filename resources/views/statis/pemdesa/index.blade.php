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
                                    <h3 class="panel-title">Data Pemerintahan Desa/Keluarahn</h3>
                                    <div class="right">
                                        <a href="/statis/pemdesa/add" class="btn btn-success btn-sm">Tambah Data</a>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <table class="table table-hover" id="datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
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
                                            @foreach ($pemdesa as $p)
                                            <tr>
                                                <th scope="row">{{$i++}}</th>
                                                <td>{{date_format(date_create($p->tanggal),"d F Y")}}
                                                </td>
                                                <td>{{$p->semester}}
                                                </td>
                                                <td>
                                                    <a href="/statis/pemdesa/{{$p->id}}/viewdata"
                                                        class="btn btn-primary btn-sm">View</a>
                                                    <a href="/statis/pemdesa/{{$p->id}}/edit"
                                                        class="btn btn-warning btn-sm">Edit</a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$pemdesa->links()}}
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