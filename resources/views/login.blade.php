@extends('heard')

@section('script')
    <script src="js/all.js"></script>
@endsection

@section('content')
    <div>
        <div>
            <label>帳號</label>
            <input type="text" id="acc" name="acc">
        </div>
        <div>
            <label>密碼</label>
            <input type="password" id="pass" name="pass">
        </div>
        <div>
            <input type="button" value="登入" onclick="login()" class="btn btn-success btn-lg">
            <input type="button" value="註冊" onclick="location.href='register'">
        </div>
    </div>
@endsection