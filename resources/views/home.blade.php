@extends('layouts.base')

@section('styles')
    <style type="text/css">
        #footer {
            margin-top: 50px;
            padding: 35px 0;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Bài viết số 1</h2>
                <p>Đừng so sánh mình với bất cứ ai trong thế giới này. Nếu bạn làm như vậy có nghĩa bạn đang sỉ nhục chính bản thân mình.</p>
                <p><a href="">Read more</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Bài viết số 2</h2>
                <p>Ta không được chọn nơi mình sinh ra. Nhưng ta được chọn cách mình sẽ sống.</p>
                <p><a href="">Read more</a></p>
            </div>
        </div>
    </div>
    <div  class="panel-default text-center">
        <div id="footer" class="panel-footer">
            <p>Copyright &copy; 2017, by linh</p>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
@endsection