<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login</title>
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
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="">
                                <div class="logo text-center"><img src="{{asset('admin/assets/img/logo-badung.png')}}" style="width:200px"></div>
                                <p class="">Login</p>
                            </div>
                            {{-- @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{session('message')}}
                            </div>
                            @endif --}}
                            <form class="form-auth-small" action="/postlogin" method="POST">
                                @csrf
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
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </form>
                            <a href="/register">Sign Up</a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		@if(Session::has('message'))
		toastr.success("{{Session::get('message')}}", "Success")
		@endif
	</script>
</body>

</html>








{{-- 
 --}}