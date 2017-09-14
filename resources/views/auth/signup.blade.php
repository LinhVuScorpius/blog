@extends('layouts.base')

@section('styles')
<style type="text/css">
	body {
		color: #000;
	}
	a {
		color: #000 !important;	}
	.container {
	}
	.padd {
		border: 1px solid #000;
		padding: 38px 50px 50px 50px;
	}
	.padd a {
		text-decoration: underline;
	}
	.form-group p {color: red;}
</style>
@endsection

@section('content')
<div class="container">
	<div class="row" style="margin: 50px 0;">
		<div class="col-sm-6 col-sm-offset-3 padd">
			<h2 style="text-align: center;"> Đăng ký </h2>	
			<form method="post" action="{{ route('postRegister') }}">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" >
					@if ($errors->has('email'))
            			<p>{{ $errors->first('email')}}</p>
         			@endif
				</div>
				<div class="form-group">
					<label for="name">Tên đăng nhâp</label>
					<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
					@if ($errors->has('name'))
		            	<p>{{ $errors->first('name')}}</p>
		          	@endif
				</div>
				<div class="form-group">
					<label for="password">Mật khẩu</label>
					<input type="password" name="password" id="password" class="form-control"  value="{{ old('password') }}">
					@if ($errors->has('password'))
		            	<p>{{ $errors->first('password')}}</p>
		          	@endif
				</div>
				<div class="form-group">
					<label for="password">Nhập lại mật khẩu</label>
					<input type="password" name="confirm_pass" id="confirm_pass" class="form-control" value="{{ old('confirm_pass') }}">
					@if ($errors->has('confirm_pass'))
		            	<p>{{ $errors->first('confirm_pass')}}</p>
		         	 @endif
				</div>
				<!-- <div class="check-box">
					<label><input type="checkbox" name="ucheck"> Tôi đồng ý với</label>
					<a href="" style="color: #3097D1 !important;">Điều khoản sử dụng</a>
				</div> -->
				<input type="submit" class="btn btn-default" name="" value="Đăng ký">
				<a href="" style="color: #3097D1 !important;">Đăng nhập</a>
			</form>
		</div>
	</div>
</div>
@endsection