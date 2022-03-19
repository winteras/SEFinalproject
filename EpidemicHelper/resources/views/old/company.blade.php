<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.default')

<!-- 傳送資料到母模板，並指定變數為title -->

<!-- 傳送資料到母模板，並指定變數為content -->
@section('content')
<form id="form1" method="GET" action="">
<div class="login_form">
    <div class="login_label">航空公司</div>
    <div class="login_textbox">
        <input name="company" class="form_textbox" type="text" placeholder="航空公司"/>
    </div>
    <div class="btn_group">
        <button type="submit" class="btn btn-primary btn_login">查詢</button>
    </div>
</div>
</form>
@foreach($company as $article)
        <h1>公司縮寫 : {{ $article->Company_shortId }}</h1>
        <hr>
@endforeach
@endsection

