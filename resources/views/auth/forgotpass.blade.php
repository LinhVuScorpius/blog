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
			<h2 style="text-align: center;"> Yêu cầu đặt lại mật khẩu </h2>	
			<form method="post" action="{{ route('postForgotPass') }}">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control">
					@if ($errors->has('email'))
		            	<p>{{ $errors->first('email')}}</p>
		          	@endif
				</div>
				<input type="submit" class="btn btn-default" name="" value="Gửi">
				<a href="{{ asset('auth/login') }}" style="color: #3097D1 !important;">Đăng nhập</a>
			</form>
		</div>
	</div>
</div>
@endsection