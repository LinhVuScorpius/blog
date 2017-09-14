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
	}.form-group p {
		color: red;
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
			<h2 style="text-align: center;"> Đặt lại mật khẩu</h2>	
			@if (Session::has('message'))
				<div class="alert alert-danger">
					{{ Session::get('message') }}
				</div>
			@endif
			<form method="post" action="{{ route('postResetPass') }}">
				{!! csrf_field() !!}
				<!-- <div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control">
					@if ($errors->has('email'))
			            <p>{{ $errors->first('email')}}</p>
			        @endif
				</div> -->
				<div class="form-group">
					<label for="password">Mật khẩu</label>
					<input type="password" name="password" class="form-control" value="{{ old('password') }}">
					@if ($errors->has('password'))
			            <p>{{ $errors->first('password')}}</p>
			        @endif
				</div>
				<div class="form-group">
					<label for="password">Nhập lại mật khẩu</label>
					<input type="password" name="comfirm_pass" class="form-control" value="{{ old('comfirm_pass') }}">
					@if ($errors->has('comfirm_pass'))
		            	<p>{{ $errors->first('comfirm_pass')}}</p>
		         	 @endif
				</div>
				<input type="submit" class="btn btn-default" name="" value="Cập nhật">
				<a href="{{ asset('auth/login') }}" style="color: #3097D1 !important;">Đăng nhập</a>
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