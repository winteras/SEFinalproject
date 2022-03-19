<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.default')

<!-- 傳送資料到母模板，並指定變數為title -->

<!-- 傳送資料到母模板，並指定變數為content -->
@section('content')
<form id="form1" method="GET" action="">
<div class="login_form">
    <div class="login_label">地區</div>
    <div class="login_textbox">
        <input name="area" class="form_textbox" type="text" placeholder="地區"/>
    </div>
    <div class="btn_group">
        <button type="submit" class="btn btn-primary btn_login">查詢</button>
    </div>
</div>
</form>
@foreach($area as $article)
        <h1>{{ $article->AreaDesc }}</h1>
        <p>{{ $article->Alert_disease}}</p>
        <hr>
@endforeach

@endsection

