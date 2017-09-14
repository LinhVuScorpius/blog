@include('toast::messages')
@extends('layouts.base')

@section('styles')
<style type="text/css">
	body {
		color: #000;
	    line-height: 14px;
	}
	.container {
	}
	.padd {
		border: 1px solid #ddd;
		border-radius: 5px;
		background: #fff;
		padding: 0 !important;
		padding-bottom: 8px !important;
	}
	.padd a {
	}
	.form-group p {color: red;}
	._m {
	    position: relative;
	    padding-left: 0px !important;
	}
	.m_1 {
		background: #f6f7f9;
	    border-radius: 18px;
	    cursor: pointer;
		position: relative;
	}
	.m_2 {
		height: 100%;
	    overflow: hidden;
	    position: absolute;
	    right: 0;
	    top: 0;
	    width: 100%;
	}
	.img {
		height: 32px;
    	line-height: 32px;
    	box-sizing: border-box;
	    color: #4b4f56;
	    display: inline-block;
	    font-weight: bold;
	    height: 34px;
	    line-height: 34px;
	    overflow: hidden;
	    padding: 0 15px 0 35px;
	    text-overflow: ellipsis;
	    vertical-align: middle;
	    white-space: nowrap;
	    width: 100%;
	}
	._m_icon {
		height: 20px;
	    left: 9px;
	    position: absolute;
	    top: 10px;
	    width: 20px;
	}
	._m_btn {
		position: absolute;
		opacity: 0;
		right: 0;
	}
	.fileupload {
		border-top: 1px solid #e9ebee;
	    margin: 0 12px;
	    padding-top: 8px;
	}
	a {
		color: #365899;
		font-weight: bold;
	}
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
@endsection

@section('content')
<div class="container  col-sm-offset-3">
	<div class="row col-sm-8" style="margin: 50px 0;">
		<div class="col-sm-8 padd navbar-left">
			<div class="top" style="border-bottom: 1px solid #ddd;height: 40px; background: #f6f7f9; ">
                <ul class="nav navbar-nav " style="height: 100%;">
                    <li><a style="color: black;">Tạo bài viết</a></li>
                    <li><a>Abum ảnh</a></li>
                    <li><a>Video trực tiếp</a></li>
                </ul>
            </div>
            <clear></clear>
			<form action="{{ route('postNewPosts') }}" method="post"> 
				{!! csrf_field() !!}
	            <div class="center" style="padding: 5px;">
	            	<div><img src="" style="width: 40px; height: 40px;float: left;"></div>
	            	<input type="text" name="status" value ="" style=" padding:5px; color:#ccc;width: 90%; height: 50px; border: none !important;">
	            </div>
	            <div class="fileupload" data-provides="fileupload">
	            	<div class="col-sm-4 _m" style="width: 30.5%;">
	            		<div class="m_1">
	            			<i class="fa fa-picture-o _m_icon" aria-hidden="true" style="color: green;"></i>
							<div class="img">Ảnh/Video</div>
	            		</div>
	            		<div class="m_2">
	            			<input type="file" name="newfiles" multiple="" class="btn btn-offset _m_btn" style="width: 100px;">
	            		</div>
	            	</div>
	            	<div class="col-sm-6 _m" style="width: 44%;">
	            		<div class="m_1">
	            			<i class="fa fa-smile-o _m_icon" aria-hidden="true" style="color: #f6c43b;"></i>
							<div class="img">Cảm xúc/Hoạt động</div>
	            		</div>
	            		<div class="m_2">
	            			<input type="file" name="" multiple="" class="btn btn-offset _m_btn" style="width: 100px;">
	            		</div>
	            	</div>
	            	<div class="col-sm-4 _m" style="width: 13%;">
	            		<div class="m_1">
							<div class="img" style="padding: 0 15px 0 15px;">...</div>
	            		</div>
	            		<div class="m_2">
	            			<input type="submit" class="btn btn-default _m_btn" name="btn" style="width: 100px;"">
	            		</div>
	            	</div>
				</div>
				<!-- {{ Toast::message('message', 'level', 'title') }} -->
			</form>
		</div>
		@if(Session::has('toasts'))
		  @foreach(Session::get('toasts') as $toast)
		    <div class="alert alert-{{ $toast['level'] }}">
		      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		      
		      {{ $toast['message'] }}
		    </div>
		  @endforeach
		@endif
		<div class="col-sm-4 padd navbar-right">
			<h2 style="text-align: center;"> vung 2 </h2>
		</div>
		<div class="col-sm-8 padd" style=" margin-top: 10px;">
			<h2 style="text-align: center;"> vung 3 </h2>
		</div>
	</div>
</div>
@endsection

@section('js')

<script type="text/javascript">
</script>
<!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->

@endsection