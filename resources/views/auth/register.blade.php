<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}"> -->
    <!-- <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}"> -->
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">

                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <p class="lead">Registrasi Account</p>
                            </div>
                            <form class="form-auth-small" action="/postregister" method="POST">
                                @csrf
                                <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}} ">
                                    <input name="nama" type="text" class="form-control" id="nama" aria-describedby="" placeholder="Nama" value="{{old('nama')}}">
                                    @if ($errors->has('nama'))
                                    <span class="help-block">{{$errors->first('nama')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}} ">
                                    <input name="email" type="email" class="form-control" id="email" aria-describedby="" placeholder="Email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}} ">
                                    <input name="password" type="password" class="form-control" id="password" aria-describedby="" placeholder="Password" value="{{old('password')}}">
                                    @if ($errors->has('password'))
                                    <span class="help-block">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('password_confirmation') ? 'has-error' : ''}} ">
                                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" aria-describedby="" placeholder="Repeat Password" value="{{old('password_confirmation')}}">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('role') ? 'has-error' : ''}} ">
                                    <select class="form-control" id="role" name="role">
                                        <option value="" {{(old('') == '') ? ' selected' : '' }}>Pilih Jabatan</option>
                                        <option value="Kadis" {{(old('role') == 'Kadis') ? ' selected' : '' }}>Kepala Dinas</option>
                                        <option value="Petugas" {{(old('role') == 'Petugas') ? ' selected' : '' }}>Petugas</option>
                                        <option value="Masyarakat" {{(old('role') == 'Masyarakat') ? ' selected' : '' }}>Masyarakat Umum</option>
                                    </select>
                                    @if ($errors->has('role'))
                                    <span class="help-block">{{$errors->first('role')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}} ">
                                    <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="" placeholder="Alamat" value="{{old('alamat')}}">
                                    {{-- <textarea name="alamat" class="form-control" id="alamat" rows="3"> {{old('alamat')}} </textarea> --}}
                                    @if ($errors->has('alamat'))
                                    <span class="help-block">{{$errors->first('alamat')}}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </form>
                        </div>
                    </div>















                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Data Monografi</h1>
                            <p>Kecamatan Mengwi, Kabupaten Badung</p>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>