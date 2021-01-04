<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Monografi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 90px;
            padding-right: 90px;
        }

        .center {
            text-align: center;
            line-height: 60%;
            margin: 15px;
        }

        hr {
            margin: 0;
        }

        .content {
            font-size: 14px;
            margin: 5px
        }

        td {
            font-size: 12px;
        }

        .left {
            text-align: left;
        }

        .table-add tr {
            border: 1px solid black;
        }

        .table-add td {
            border: 1px solid black;
        }

        .white {
            color: white;
        }

        .table-add {
            margin-left: 45px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        .table-add tr,
        .table-add td {
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 2px;
            padding-bottom: 2px;
        }
    </style>
</head>

<body>
    <img src="{{'D:\xampp\htdocs\data-monografi-mengwi\public\admin\assets\img\laporan.png'}}" width="100px"
        style="position: absolute; left:100px; top:80px;">
    {{-- <img src="{{asset('admin/assets/img/laporan.png')}}" width="100px"
    style="position: absolute; left:300px; top:80px;"> --}}
    <h2 class="center">DATA MONOGRAFI KECAMATAN</h1>
        <p class="center">KECAMATAN : MENGWI</p>
        <p class="center">KABUPATEN : BADUNG</p>
        <p class="center">PROPINSI : BALI</p>
        <p class="center">TAHUN : {{date_format(date_create($kumum->tanggal), "Y")}}</p>
        <p class="center">BULAN : {{$sem}}</p>

        <hr>
        <hr><br>



        <pre class="white">
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
        a
    </pre>
        <h1 class="center">DATA MONOGRAFI</h1>
        <h1 class="center">KEC. MENGWI</h1>
        <h1 class="center">{{date_format(date_create($kumum->tanggal), "Y")}}</h1>



</body>

</html>