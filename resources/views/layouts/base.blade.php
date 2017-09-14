<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ảnh vui</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        @section('styles')@show
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Ảnh vui</a>
            </div>
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Nóng nhất</a></li>
                    <li><a href="#">Mới nhất</a></li>
                    <li><a href="#">Bạn đã đánh dấu</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                    <li><a href="{{ asset('auth/login') }}">Đăng nhập</a></li>
                    <li><a href="{{ asset('auth/signup') }}">Đăng ký</a></li>
                    @else
                    <li><a style="color: #000; font-weight: bold;">{{ ucwords(Auth::user()->name) }}</a></li> 
                    <li><a href="{{ URL::route('postLogout') }}">Logout</a></li>
                    <li><a href="{{ asset('auth/resetpass') }}">Đặt lại mật khẩu</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        @yield('content')

        @section('js')
        
        @show
    </body>
</html>
