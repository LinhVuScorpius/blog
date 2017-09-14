@extends('layouts.base')

@section('styles')
<style type="text/css">
	body {
		color: #000;
	}
	a {
		color: #000 !important;
	}
	.container {
	}
	.padd {
		border: 1px solid #000;
		padding: 38px 50px 50px 50px;
	}
	.padd a {
		text-decoration: underline;
	}
	.form-group p {
		color: red;
	}
</style>
@endsection

@section('content')
<div class="container">
	<div class="row" style="margin: 50px 0;">
		
		<div class="col-sm-6 col-sm-offset-3 padd">
			<h2 style="text-align: center;"> Đăng nhập </h2>	
			@if (Session::has('message'))
				<div class="alert alert-danger">
					{{ Session::get('message') }}
				</div>
			@endif
			<form method="post" action="{{ route('postLogin') }}">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="name">Tên đăng nhâp</label>
					<input type="text" name="name" class="form-control" value="{{ old('name') }}">
					@if ($errors->has('name'))
		            	<p>{{ $errors->first('name')}}</p>
		          	@endif
				</div>
				<div class="form-group">
					<label for="password">Mật khẩu</label>
					<input type="password" name="password" class="form-control" value="{{ old('password') }}">
					@if ($errors->has('password'))
            			<p>{{ $errors->first('password')}}</p>
          			@endif
				</div>
				<div class="check-box">
					<label><input type="checkbox" name="remember">Ghi nhớ</label>
				</div>
				<input type="submit" class="btn btn-default" name="" value="Đăng nhập">
				<a href="{{ asset('auth/forgotpass') }}" style="color: #3097D1 !important;">Quên mật khẩu</a>
			</form>
		</div>
	</div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
	$('.alert').delay(3000).slideUp();
</script>
@endsection